var Departments = {
    run: function (element) {
        jQuery(document).ready(function () {
            $(element).modal('show');
        });
    },
    create: function () {
        Departments.run('#register-department');
    },
    companies: function() {
        Departments.run('#link-companies');
    }
};