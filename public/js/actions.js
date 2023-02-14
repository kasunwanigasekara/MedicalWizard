


function getIdDetails(value)
{
let id=value;

if(confirm("Are you sure you want to edit this patient data?"))  
           {  
                window.open('action.php?Details=yes&patient_id='+id+'');
           }  
           else  
           {  
                return false;  
           }  

}




