# <?php exit; ?>

- backend:
  DEBUG: true
  # 如跨域访问不可修改
  SESSION_TYPE:   DB
  SESSION_TABLE:  x_session
  SESSION_EXPIRE: 3600
  MAIL_CHARSET:   UTF-8   #编码
  MAIL_AUTH:      true   #邮箱认证
  MAIL_HTML:      true   #true HTML格式 false TXT格式
  - preloadJSDebug:
    - "vendor/jquery/jquery-2.1.1.min.js"
    - "vendor/angular-1.2.22/angular.min.js"
    - "vendor/bootstrap.min.js"
    - "vendor/angular-1.2.22/angular-resource.min.js"
    - "vendor/angular-1.2.22/angular-cookies.min.js"
    - "vendor/angular-1.2.22/angular-sanitize.min.js"
    - "vendor/angular-1.2.22/angular-route.min.js"
    - "vendor/angular-1.2.22/angular-animate.min.js"
    - "vendor/angularModules/ng-grid/ng-grid-2.0.12.debug.js"
    - "vendor/angularModules/angular-strap/angular-strap.min.js"
    - "vendor/angularModules/angular-strap/angular-strap.tpl.min.js"
    - "vendor/angularModules/ui-utils/ui-utils.min.js"
    - "vendor/jquery/chosen/chosen.jquery.min.js"
    - "vendor/angularModules/angular-chosen/chosen.js"
    - "vendor/angularModules/angular-file-upload/angular-file-upload.min.js"
    - "vendor/angularModules/angular-file-upload/directives.js"
    - "vendor/ace/ace.min.js"
    - "vendor/ace/ace-elements.min.js"
    - "vendor/ace/ace-extra.min.js"
    - "vendor/highcharts/highcharts.js"
    - "vendor/highcharts/highchartsExporting.js"
    - "vendor/highcharts/ng-highcharts.js"
    - "vendor/jquery/select2.js"
    - "base/config.js"
    - "lib/function.js"
    - "lib/formMaker.js"
    - "lib/plugin.js"
    - "base/controller.js"
    - "base/filter.js"
    - "base/directive.js"
    - "base/service.js"
    - "base/model.js"
    - "base/app.js"
    - "base/plugin.js"