$(document).ready(function(){
    $("#insert.php").validate({
        rules:{
            id:{
                required:true,
                maxlength:3,
                minlength:3
            },
            name:{
                required:true,
                minlength:6
            },
            user_name:{
                required:true,
                minlength:4
            },
            mail:{
                required:true,
                minlength:8
            },
            password:{
                required:true,
                minlength:6
            },
            phone:{
                required:true,
                minlength:10,
                maxlength:10
            },
            age:{
                required:true
                
            },
            address:{
                required:true,
                minlength:6

                
            },
            age:{
                required:true
                
            },
            gender:{
                required:true
                
            },
            fee:{
                required:true,

            },
            
                
            
        }
    })
})