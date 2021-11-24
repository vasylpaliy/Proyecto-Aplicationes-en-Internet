
            function validacion()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Los campos estan vacios");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Introduzca su ID");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Introduzca una contraseña");  
                    return false;  
                    }  
                }                             
            }  
