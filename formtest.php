        <style type="text/css">
            .invalid{
  border-color: #E9322D!important;
box-shadow: 0 0 6px #F8B9B7!important;
}
        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        
        <div class="container">
  <h3>Bootstrap Live Form Validation with Popover</h3>
  <p class="page-header text-success">Start typing in the fields..</p>
  <form class="form-horizontal col-sm-8">
    <div class="form-group"><label>Gender</label><select class="form-control required gender" data-placement="top" data-trigger="manual" data-content="You must choose a gender."><option value="">Please choose a gender</option>
    <option value="1">Male</option><option value="2">Female</option><option value="3">Unisex</option> </select></div>
    <div class="form-group"><label>Name</label><input class="form-control required name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
    <div class="form-group"><label>Password</label><input class="form-control required pass" data-placement="top" data-trigger="manual" data-content="Must be at least 6 characters long, and contain at least one number, one uppercase and one lowercase letter." type="password"></div>
    <div class="form-group"><label>E-Mail</label><input class="form-control email" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
    <div class="form-group"><label>Phone</label><input class="form-control phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text"></div>
    <div class="form-group"><label>Bio</label><textarea id="bio" name="bio" type="text" data-content="Must be at least 3 characters long" data-trigger="manual" data-placement="left" class="form-control required body" cols="50" rows="6" data-original-title="" title=""></textarea></div>
    <div class="form-group"><button type="submit" class="btn btn-default pull-left">Submit</button> <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p></div>
  </form>
  
</div>



        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>






        
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
            $.fn.goValidate = function() {
    var $form = this,
        $inputs = $form.find('input:text, input:password'),
        $selects = $form.find('select'),
        $textAreas = $form.find('textarea');
  
    var validators = {
        name: {
            regex: /^[A-Za-z]{3,}$/
        },
        username: {
            regex: /^[A-Za-z]{6,}$/
        },
        firstName: {
            regex: /^[A-Za-z]{3,}$/
        },
        lastName: {
            regex: /^[A-Za-z]{3,}$/
        },
        town: {
            regex: /^[A-Za-z]{3,}$/
        },
        postcode: {
            regex: /^.{3,}$/
        },
        password1: {
            regex: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
        },
        password1_repeat: {
            regex: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
        },
        email: {
            regex: /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/
        },
        phone: {
            regex: /^[2-9]\d{2}-\d{3}-\d{4}$/,
        },
        body: {
            regex: /^.{3,}$/
        },
        country: {
            regex: /^(?=\s*\S).*$/,
        }
    };
    var validate = function(klass, value) {
        var isValid = true,
            error = '';
            
        if (!value && /required/.test(klass)) {
            error = 'This field is required';
            isValid = false;
        } else {
            klass = klass.split(/\s/);
            $.each(klass, function(i, k){
                if (validators[k]) {
                    if (value && !validators[k].regex.test(value)) {
                        isValid = false;
                        error = validators[k].error;
                    }
                }
            });
        }
        return {
            isValid: isValid,
            error: error
        }
    };
    var showError = function($e) {
        var klass = $e.attr('class'),
            value = $e.val(),
            test = validate(klass, value);
      
        $e.removeClass('invalid');
        $('#form-error').addClass('hide');
        
        if (!test.isValid) {
            $e.addClass('invalid');
            
            if(typeof $e.data("shown") == "undefined" || $e.data("shown") == false){
               $e.popover('show');
            }
            
        }
      else {
        $e.popover('hide');
      }
    };
   
    $inputs.keyup(function() {
        showError($(this));
    });
    $selects.change(function() {
        showError($(this));
    });
    $textAreas.keyup(function() {
        showError($(this));
    });
  
    $inputs.on('shown.bs.popover', function () {
      $(this).data("shown",true);
  });
  
    $inputs.on('hidden.bs.popover', function () {
      $(this).data("shown",false);
  });
  
    $form.submit(function(e) {
      
        $inputs.each(function() { /* test each input */
          if ($(this).is('.required') || $(this).hasClass('invalid')) {
              showError($(this));
          }
      });
      $selects.each(function() { /* test each input */
          if ($(this).is('.required') || $(this).hasClass('invalid')) {
              showError($(this));
          }
      });
      $textAreas.each(function() { /* test each input */
          if ($(this).is('.required') || $(this).hasClass('invalid')) {
              showError($(this));
          }
      });
        if ($form.find('input.invalid').length) { /* form is not valid */
          e.preventDefault();
            $('#form-error').toggleClass('hide');
        }
    });
    return this;
};



  $('form').goValidate();
        
        });
        
        </script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>
        
        
        <style>
            .ad {
              position: absolute;
              bottom: 70px;
              right: 48px;
              z-index: 992;
              background-color:#f3f3f3;
              position: fixed;
              width: 155px;
              padding:1px;
            }
            
            .ad-btn-hide {
              position: absolute;
              top: -10px;
              left: -12px;
              background: #fefefe;
              background: rgba(240,240,240,0.9);
              border: 0;
              border-radius: 26px;
              cursor: pointer;
              padding: 2px;
              height: 25px;
              width: 25px;
              font-size: 14px;
              vertical-align:top;
              outline: 0;
            }
            
            .carbon-img {
              float:left;
              padding: 10px;
            }
            
            .carbon-text {
              color: #888;
              display: inline-block;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              height: 60px;
              margin-left: 9px;
              width: 142px;
              padding-top: 10px;
            }
            
            .carbon-text:hover {
              color: #666;
            }
            
            .carbon-poweredby {
              color: #6A6A6A;
              float: left;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              margin-left: 10px;
              margin-top: 13px;
              text-align: center;
            }
        </style>
        <div class="ad collapse in">
          <button class="ad-btn-hide" data-toggle="collapse" data-target=".ad">&times;</button>
          <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=bootplycom" id="_carbonads_js"></script>
        </div>