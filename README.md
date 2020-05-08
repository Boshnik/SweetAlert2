# SweetAlert2
Красивые уведомления для AjaxForm, Office и Minishop2

![](https://file.modx.pro/files/a/d/9/ad9baa1ba7a53bdaf38b346747080cac.jpg)

Системные настройки:

| Название | Значение | Описание |
| ---| --- | -- |
| swal2_position | top-end | Позиция модального окна, может быть "top", "top-start", "top-end", "center", "center-start", "center-end", "bottom", "bottom-start", или "bottom-end". |
| swal2_timer | 3000 | Таймер автоматического закрытия модального окна. Установить в миллисекундах. | 
| swal2_showconfirmbutton | false | Если установлено значение false, кнопка "Подтвердить" не будет отображаться. |
| swal2_toast | false | Следует ли рассматривать предупреждение как тостовое уведомление. Эта опция обычно связана с параметром позиции и таймером. Тосты НИКОГДА не автофокусированы.

[Документация по опциям](https://sweetalert2.github.io/#configuration)

По умолчанию SweetAlert2 принимает опции системных настроек, но вы всегда можете переопределить их или добавить другие опции.

1. Инициализируем заново SweetAlert2 и передаем новые опции:
       
        SweetAlert2.initialize({ 
            footer: '2020', 
            backdrop: 'rgba(0,0,0,.5)'
        })


2. Изменяем существующую конфигурацию:
        
        SweetAlert2.config.toast = true;
        SweetAlert2.config.backdrop = 'rgba(0,0,0,.5)';

[Смотреть все примеры](https://sweetalert2.github.io/#examples)

### [Компонент доступен в modstore](https://modstore.pro/packages/alerts-mailing/sweetalert2)