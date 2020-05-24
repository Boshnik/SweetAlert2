var SweetAlert2 = {};
SweetAlert2.initialize = function(config = {}, packages = {}) {
    if(typeof(Swal) == 'undefined') return true;
    this.config = config;
    this.packages = packages;
    
    if(packages.ajaxform) {
         this.AjaxForm();
    }
    if(packages.minishop2) {
        this.miniShop2();
    }
    if(packages.office) {
        this.Office();
    }
    if(packages.msoneclick) {
        this.msOneClick();
    }

    return true;
};

SweetAlert2.Message = {
    success: function (message, config = {}) {
        if(!message) return;
        Swal.fire(Object.assign({
          icon: 'success',
          title: message,
        }, SweetAlert2.config, config));
    },
    error: function (message, config = {}) {
        if(!message) return;
        Swal.fire(Object.assign({
          icon: 'error',
          title: message,
        }, SweetAlert2.config, config));
    },
    info: function (message, config = {}, options = '') {
        if(!message) return;
        Swal.fire(Object.assign({
          icon: 'info',
          title: message + options,
        }, SweetAlert2.config, config));
    },
    warning: function (message, config = {}) {
        Swal.fire(Object.assign({
          icon: 'info',
          title: message,
        }, SweetAlert2.config, config));
    },
    question: function (message, config = {}) {
        if(!message) return;
        Swal.fire(Object.assign({
          icon: 'question',
          title: message,
        }, SweetAlert2.config, config));
    },
    close: function() {
        // Swal.close();
    }
    
};

SweetAlert2.AjaxForm = function() {
    if (typeof(AjaxForm) != 'undefined') {
        AjaxForm.Message = {
            success: function (message, sticky) {
                SweetAlert2.Message.success(message);
            },
            error: function (message, sticky) {
                SweetAlert2.Message.error(message);
            },
            info: function (message, sticky) {
                SweetAlert2.Message.info(message);
            },
            close: function () {
                SweetAlert2.Message.close();
            }
        };
    }
};

SweetAlert2.miniShop2 = function () {
    if (typeof(miniShop2) != 'undefined') {
        miniShop2.Message = {
            initialize: function() {
                miniShop2.Message.close = SweetAlert2.Message.close;
                miniShop2.Message.show = function(message, options) {
                    if (message !== '') {
                        SweetAlert2.Message.info(message, {}, options);
                    }
                };
            },
            success: function(message) {
                SweetAlert2.Message.success(message);
            },
            error: function(message) {
                SweetAlert2.Message.error(message);
            },
            info: function(message) {
                SweetAlert2.Message.info(message);
            }
        };
        miniShop2.Message.initialize();
    }
};

SweetAlert2.Office = function () {
    if (typeof(Office) != 'undefined') {
        Office.Message = {
            success: function (message, sticky) {
                SweetAlert2.Message.success(message);
            },
            error: function (message, sticky) {
                SweetAlert2.Message.error(message);
            },
            info: function (message, sticky) {
                SweetAlert2.Message.info(message);
            },
            close: function () {
                SweetAlert2.Message.close();
            }
        };
    }
};

SweetAlert2.msOneClick = function () {
    if (typeof(msOneClick) != 'undefined') {
        msOneClick.Message = {
            initialize: function() {
                msOneClick.Message.close = SweetAlert2.Message.close;
                msOneClick.Message.show = function(message, options) {
                    if (message !== '') {
                        SweetAlert2.Message.info(message, {}, options);
                    }
                };
            },
            success: function(message) {
                SweetAlert2.Message.success(message);
            },
            error: function(message) {
                SweetAlert2.Message.error(message);
            },
            info: function(message) {
                SweetAlert2.Message.info(message);
            }
        };
        msOneClick.Message.initialize();
    }
};