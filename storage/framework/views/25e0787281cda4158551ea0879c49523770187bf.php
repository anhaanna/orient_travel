    <div id='modal' >
        <div id="modal-container">
            <img id="star_modal" src="/images/ornament.png">
            <div id="modal-form">
                <h1><?php echo app('translator')->getFromJson('home.send_request'); ?></h1>

                <div id="form-messages"></div>

                <form id="ajax-contact" method="post" action="">


                    <div id="your_preferences" class="field">

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="Armenia" name="Armenia" id="Armenia">
                            <label for="Armenia"><?php echo app('translator')->getFromJson('home.armenia'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="Georgia" name="Georgia" id="Georgia">
                            <label for="Georgia"><?php echo app('translator')->getFromJson('home.georgia'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="Iran" name="Iran" id="Iran">
                            <label for="Iran"><?php echo app('translator')->getFromJson('home.iran'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="Kyrgyzstan" name="Kyrgyzstan" id="Kyrgyzstan">
                            <label for="Kyrgyzstan"><?php echo app('translator')->getFromJson('home.kyrgyzstan'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="Mongolia" name="Mongolia" id="Mongolia">
                            <label for="Mongolia"><?php echo app('translator')->getFromJson('home.mongolia'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="Tajikistan" name="Tajikistan" id="Tajikistan">
                            <label for="Tajikistan"><?php echo app('translator')->getFromJson('home.tajikistan'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="Turkmenistan" name="Turkmenistan" id="Turkmenistan">
                            <label for="Turkmenistan"><?php echo app('translator')->getFromJson('home.turkmenistan'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="Kazakhstan" name="Kazakhstan" id="Kazakhstan">
                            <label for="Kazakhstan"><?php echo app('translator')->getFromJson('home.kazakhstan'); ?></label>
                        </div>

                        <div class="checkbox">
                            <input class="checkboxes" type="checkbox" value="Uzbekistan" name="Uzbekistan" id="Uzbekistan">
                            <label for="Uzbekistan"><?php echo app('translator')->getFromJson('home.uzbekistan'); ?></label>
                        </div>

                    </div>
                    <div class="field">
                        <input required="" type="text" class="input" id="name" name="name" placeholder="Name">
                        <span class="field-icon"><i class="fa fa-user"></i></span>
                    </div>

                    <div class="field">
                        <input required="" type="email" class="input" id="email" name="email" placeholder="Email">
                    </div>

                    <div class="field">
                        <textarea required="" id="message" class="input" name="message" placeholder="Message"></textarea>
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

                if (!$("#email").val()) {
                   $("#email").addClass('warning');
                   $("#email").attr('placeholder', 'Please Enter Your Email * (required)')                 
                }
                if(!$("#name").val()) {
                   $("#name").addClass('warning');
                   $("#name").attr('placeholder', 'Please Enter Your Name * (required)')                 
                }
                if (!$("#message").val()) {
                   $("#message").addClass('warning');
                   $("#message").attr('placeholder', 'Please Enter Your Message * (required)')                 
                }

        });

        $('.input').on('keyup', function(){
            $(this).removeClass('warning');
        });


        $('#enquire-a').on('click',function(){
                   
                $('#ajax-contact').css('display','block');
                $('#send').removeClass('clicked');
            

        })
});    

</script>
