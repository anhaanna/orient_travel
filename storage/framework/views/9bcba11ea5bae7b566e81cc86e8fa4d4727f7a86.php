    <div id='modal' >
        <div id="modal-container">
            <img id="star_modal" src="/images/ornament.png">
            <div id="modal-form">
                <h1><?php echo app('translator')->getFromJson('home.send_request'); ?></h1>

                <div id="form-messages"></div>

                <form id="ajax-contact" method="post" action="">


                    <div id="your_preferences" class="field">

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="armenia" name="armenia" id="armenia">
                            <label for="armenia"><?php echo app('translator')->getFromJson('home.armenia'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="georgia" name="georgia" id="georgia">
                            <label for="georgia"><?php echo app('translator')->getFromJson('home.georgia'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="iran" name="iran" id="iran">
                            <label for="iran"><?php echo app('translator')->getFromJson('home.iran'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="kyrgyzstan" name="kyrgyzstan" id="kyrgyzstan">
                            <label for="kyrgyzstan"><?php echo app('translator')->getFromJson('home.kyrgyzstan'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="mongolia" name="mongolia" id="mongolia">
                            <label for="mongolia"><?php echo app('translator')->getFromJson('home.mongolia'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="tajikistan" name="tajikistan" id="tajikistan">
                            <label for="tajikistan"><?php echo app('translator')->getFromJson('home.tajikistan'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="turkmenistan" name="turkmenistan" id="turkmenistan">
                            <label for="turkmenistan"><?php echo app('translator')->getFromJson('home.turkmenistan'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="kazakhstan" name="kazakhstan" id="kazakhstan">
                            <label for="kazakhstan"><?php echo app('translator')->getFromJson('home.kazakhstan'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="uzbekistan" name="uzbekistan" id="uzbekistan">
                            <label for="uzbekistan"><?php echo app('translator')->getFromJson('home.uzbekistan'); ?></label>
                        </div>

                    </div>
                    <div class="field">
                        <input required="" type="text" class="input" id="name" name="name" placeholder="<?php echo app('translator')->getFromJson('home.name'); ?>">
                    </div>

                    <div class="field">
                        <input required="" type="email" class="input" id="email" name="email" placeholder="<?php echo app('translator')->getFromJson('home.email'); ?>">
                        <div id="valid_email"></div>
                    </div>

                    <div class="field">
                        <textarea required="" id="message" class="input" name="message" placeholder="<?php echo app('translator')->getFromJson('home.dream'); ?>"></textarea>
                    </div>

                    <div class="sendfield">
                        <button id='send' type="button">
                            <p><?php echo app('translator')->getFromJson('home.send'); ?></p>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
				    <path id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
				M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path>
				  </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>


<script>


$(document).ready(function(){

    var checkboxes=[];
    var i=0;
            $('.checkboxes').click(function(){



                    if($(this).is(":checked")){

                         checkboxes[i]=$(this).val(); 
                         i++;  
                    }else{

                        for(j=0;j<checkboxes.length;j++){
                            if($(this).val()==checkboxes[j]){
                                checkboxes.splice(j, 1)
                            } 
                        }
                    }
                 
            })

             /*checkbox*/
                var path = window.location.href;
                var parts = path.split('/');
                var lastSegment = parts.pop() || parts.pop();
                var erkrner = ["armenia", "georgia", "iran", "kazakhstan", "kyrgyzstan", "turkmenistan", "tajikistan", "uzbekistan", "mongolia"];
                $.each(erkrner, function (index, value) {
                    if (lastSegment == value ) {
                            $('#' + value).prop("checked", true).attr('checked', 'checked');
                            checkboxes[i] = value;
                            console.log(checkboxes);
                    }
                });


      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        

        $("#send").click(function(e){    
            e.preventDefault();  

            $.ajax({
                url: '/htmlmail',

                type: 'POST',

                data: {_token: CSRF_TOKEN, 'name':$("#name").val(), 'email':$("#email").val(), 'message':$("#message").val(),'countries':checkboxes},

                dataType: 'text',

                success: function (data) { 

                if(data){

                    $('#form-messages').html('<p class="success">Thank you! Your message has been sent</p>');
                    $('#ajax-contact').css('display','none');
                }

                },
                error:function(error){
                    $('#form-messages').html('<p class="error" > Oops! Something went wrong and we could not send your message</p>');
                    $('#send').removeClass('clicked');
                }



         });
           
                $('#send').addClass('clicked');

                
                if(!$("#name").val()) {
                   $('#send').removeClass('clicked');
                   $("#name").addClass('warning');
                   $("#name").attr('placeholder', 'Please Enter Your Name * (required)')                 
                }
                if (!$("#message").val()) {
                $('#send').removeClass('clicked');
                   $("#message").addClass('warning');
                   $("#message").attr('placeholder', 'Please Enter Your Message * (required)')                 
                }

                $booking_email = $("#email").val();

                if( /(.+)@(.+){2,}\.(.+){2,}/.test($booking_email) ){
                  $("#email").addClass('warning');
                }
                else if (!$("#email").val()) {
                   $('#send').removeClass('clicked');
                   $("#email").addClass('warning');
                   $("#email").attr('placeholder', 'Please Enter Your Email * (required)');

                }

                else {
                    $('#send').removeClass('clicked'); 
                    $('#valid_email').html('<p class="error">Please Enter Valid Email</p>');
                }

        });

        $('.input').on('keyup', function(){
            $(this).removeClass('warning');
            $('.error').css('display','none');
        });

        $('textarea').on('keyup', function(){
            $(this).removeClass('warning');
        });


        $('#enquire-a').on('click',function(){
                   
                $('#ajax-contact').css('display','block');
                $('#send').removeClass('clicked');            

        });



        });   
</script>
