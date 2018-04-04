var Companies = {
  run: function (element) {
    jQuery(document).ready(function () {
      $(element).modal('show');
    });
  },
  create: function () {
    Companies.run('#register-company');
  },
  edit: function () {
    Companies.run('#edit-company');
  },
  companies: function () {
    Companies.run('#link-companies');
  }
};