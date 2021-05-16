
  
  
  // полифилл CustomEven для IE11
    (function () {
        if (typeof window.CustomEvent === "function") return false;
        function CustomEvent(event, params) {
          params = params || { bubbles: false, cancelable: false, detail: null };
          var evt = document.createEvent('CustomEvent');
          evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
          return evt;
        }
        window.CustomEvent = CustomEvent;
      })();
  
      $modal = function (options) {
        var
          _elemModal,
          _eventShowModal,
          _eventHideModal,
          _hiding = false,
          _destroyed = false,
          _animationSpeed = 200;
  
    
     
  
        function _createModal(options) {
          var
            elemModal = document.createElement('div'),
            modalTemplate = '<div class="modal__backdrop" data-dismiss="modal"><div class="modal__content"><div class="modal__header"><div class="modal__title" data-modal="title">{{title}}</div><span class="modal__btn-close" data-dismiss="modal" title="Закрыть">×</span></div><div class="modal__body" data-modal="content">{{content}}</div>{{footer}}</div></div>',
            modalFooterTemplate = '<div class="modal__footer">{{buttons}}</div>',
            modalButtonTemplate = '<button type="button" class="{{button_class}}" data-handler={{button_handler}}>{{button_text}}</button>',
            modalHTML,
            sur = document.getElementById('text').value,
            number = document.getElementById('num').value,
            counter = document.getElementById('count').value,
            modalFooterHTML = '';

            function getRandomInt(min, max) {
              min = Math.ceil(min);
              max = Math.floor(max);
              return Math.floor(Math.random() * (max - min)) + min; //Включно з мінімальним та виключаючи максимальне значення
            
            }
            var
            random = getRandomInt(300,5000),
            mon = 100 * (+counter - 1),
            text_cont = `Адреса: Симоненка ${number} <br> Ваш борг складає: ${random} грн. + 100 за кожного додаткового співжителя <br> Сумарно: ${random + mon}`;


          elemModal.classList.add('modal');
          modalHTML = modalTemplate.replace('{{title}}', 'Вітаю ' + sur );
          modalHTML = modalHTML.replace('{{content}}', text_cont);
          if (options.footerButtons) {
            for (var i = 0, length = options.footerButtons.length; i < length; i++) {
              var modalFooterButton = modalButtonTemplate.replace('{{button_class}}', options.footerButtons[i].class);
              modalFooterButton = modalFooterButton.replace('{{button_handler}}', options.footerButtons[i].handler);
              modalFooterButton = modalFooterButton.replace('{{button_text}}', options.footerButtons[i].text);
              modalFooterHTML += modalFooterButton;
            }
            modalFooterHTML = modalFooterTemplate.replace('{{buttons}}', modalFooterHTML);
          }
          modalHTML = modalHTML.replace('{{footer}}', modalFooterHTML);
          elemModal.innerHTML = modalHTML;
          document.body.appendChild(elemModal);
          return elemModal;
        }
  
        function _showModal() {
          if (!_destroyed && !_hiding) {
            _elemModal.classList.add('modal__show');
            document.dispatchEvent(_eventShowModal);
          }
        }
  
        function _hideModal() {
          _hiding = true;
          _elemModal.classList.remove('modal__show');
          _elemModal.classList.add('modal__hiding');
          setTimeout(function () {
            _elemModal.classList.remove('modal__hiding');
            _hiding = false;
          }, _animationSpeed);
          document.dispatchEvent(_eventHideModal);
        }
  
        function _handlerCloseModal(e) {
          if (e.target.dataset.dismiss === 'modal') {
            _hideModal();
          }
        }
  
        _elemModal = _createModal(options || {});
  
  
        _elemModal.addEventListener('click', _handlerCloseModal);
        _eventShowModal = new CustomEvent('show.modal', { detail: _elemModal });
        _eventHideModal = new CustomEvent('hide.modal', { detail: _elemModal });
  
        return {
          show: _showModal,
          hide: _hideModal,
          destroy: function () {
            _elemModal.parentElement.removeChild(_elemModal),
              _elemModal.removeEventListener('click', _handlerCloseModal),
              destroyed = true;
          },
          setContent: function (html) {
            _elemModal.querySelector('[data-modal="content"]').innerHTML = html;
          },
          setTitle: function (text) {
            _elemModal.querySelector('[data-modal="title"]').innerHTML = text;
          }
        }
      };
  
      (function () {
          
        // создаём модальное окно
       
        // при клике по кнопке #show-modal
        document.querySelector('#show-modal').addEventListener('click', function (e) {
          var modal = $modal();      
          // отобразим модальное окно 
          modal.show();
        });
      })();