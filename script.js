
function searchProperty(){
    let input=document.getElementById('Psearch');
    if (input !== null) {
        let inputValue = input.value.toLowerCase();
        let residentName=document.getElementsByClassName("location");
        let hideShow=document.getElementsByClassName("remove");

        for (let i=0 ;i<residentName.length;i++){
            if(!residentName[i].innerText.toLowerCase().includes(inputValue)){
                hideShow[i].style.display='none';
                console.log(hideShow[i]);
            }else{
                hideShow[i].style.display='block';
                console.log(hideShow[i]);
            }
        }
    }
}


