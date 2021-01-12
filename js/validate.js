
                function isAdd(ele)
                {
                    var r=/[^a-z,A-Z,\u0a81-\u0aef,0-9,-:_\s]+/i;
                    //var r=/^[0-9a-zA-Z]+$/;
                   // var r=/\W$/i;
                   //\u0a81-\u0aef
                   //\u0ae6-\u0aef  
                    if(r.test(ele.value))
                     {
                         alert("Alphabate and number allow");
                         ele.value="";
                         ele.focus();
                     }
                }
                 
                function checklength(el)
                {
                    if(el.value.length !=10) 
                    {
                        alert("Phone number not Valid.");
                    } 
                }

                function checkpin(el)
                {
                    if(el.value.length !=6) 
                    {
                        alert("Pincode number not valid.");
                    } 
                }
                function isalpha(ele)
                {
                    //var r= /^[-'a-z\u0a81-\u0ae6]{1,20}$/i;
                    //var r = [\u0a81-\u0ae6];
                  // var r=/[^a-z,A-Z]+/i;
                    //var r=/[^a-z,A-Z,\u0a81-\u0ae6,_\s]+/i;
                    var r=/[^a-z,A-Z,\u0a81-\u0ae6,_\s]+/i;
                    if(r.test(ele.value))
                     {
                         alert("Please Enter Only alphabate .");
                         ele.value="";
                         ele.focus();
                     }
                }
                function isnum(ele)
                {
                    var r=/[^\u0ae6-\u0aef,0-9]+/i;
                   // var r=/\D$/i;
                    if(r.test(ele.value))
                     {
                         alert("Add only number.");
                         ele.value="";
                         ele.focus();
                     }
                }
                function check()
                {
                    if(document.getElementById('fpass').value === document.getElementById('frepass').value)
                    {
                        
                    } 
                    else 
                    {
                        alert("Password not match");
                    }
                }
               

                function validateform(myform)
                {
                   // var em=/[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]+/;
                    mform=document.forms[myform];
                    if(mform.fname.value=="" ||mform.faddress.value=="" || mform.fvillage.value=="" || mform.ftaluka.value=="" || mform.fdistrict.value=="" || mform.fstate.value=="" || mform.fpincode.value=="" || mform.fphone.value=="" || mform.fpincode.value==""|| mform.fpass.value=="" || mform.frepass.value=="" || mform.cphoto.value=="")
                     {
                         alert("Some field not Occupied.");
                         return false;
                         //  myform.onsubmit=false;
                     }
                }
                function validateformforgot(mmyform)
                {
                   // var em=/[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]+/;
                    myform=document.forms[mmyform];
                    if(myform.uname.value=="" ||myform.txtpass.value=="" || myform.txtpassc.value=="")
                     {
                         alert("Some Field is Missing");
                         return false;
                         //  myform.onsubmit=false;
                     }
                }

                 function checkemail() {
        var email_x = document.getElementById("femail").value;
        filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (filter.test(femail.value)) {
           
            return true;
        } else {
            alert("Email address Not valid");
           }
       }
                function validateloginform(mmyform)
                {

                    myform=document.forms[mmyform];
                    if(myform.txtname.value=="" || myform.txtpass.value=="")
                     {
                         alert("Some Field is Missing.");
                        // myform.onSubmit=false;
                         return false;
                      } 
                     
                }
                             

  /*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


