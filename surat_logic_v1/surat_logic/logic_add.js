let i=1;
function addPilihan()
{
    let container= document.getElementById("container_logic");
    let select=$("#pilihan").clone();
    select.prop('id', 'pilihan'+i);
    console.log(select[0].children);
    let children=select[0].children[0];
    console.log(children);
    children.id='data'+i;
    select.appendTo("#container_logic");
    removeChildren('pilihan'+i);
    i++;
}

function removePilihan()
{
    if(i<=1)
    {

    }
    else
    {
        let j=i-1;
        $("#pilihan"+j).remove();
        console.log(i);
        i--;
    }

}

function removeChildren(id)
{

    console.log($( "#"+id )[0].children[1]);
    let child_remove=$( "#"+id )[0].children[1];
    if(child_remove==undefined)
    {

    }
    else
    {
        child_remove.remove();
    }
}

$(document).on('change', '.data', function() {
    let id;
    id = ($(this)).attr('id');
    let pilihan;
    pilihan=id.replace("data","pilihan");
    // alert("pilihan");
    removeChildren(pilihan);
    // alert(id);
    $("#"+id).after("<input type='text' class='form form-control' id='"+"child_"+id +"'></input>");
});

function stringBuilder()
{
    let countData=i;

    if(countData==1)
    {
    //    Single Logic
        singleLogic();

    }
    else
    {
    //    logic builder
        let x=1;
        let firstPil=$("#data").val();
        let generateString=firstPil;
        while (x<countData)
        {
            let get=$("#data"+x).val();
             generateString=generateString+"~"+get;
            x++;
        }

    //    Data text builder
        let y=1;
        let firstChild=$("#child_data").val();
        let generateText=firstChild;
        while (y<countData)
        {
            let getData=$("#child_data"+y).val();
            generateText=generateText+"~"+getData;
            y++;
        }
        saveData(generateString,generateText);




    }
}

function singleLogic() {
    let firstPil=$("#data").val();
    let firstText=$("#child_data").val();
    saveData(firstPil,firstText);
}

function saveData(logic,text)
{
  let logic_text=logic;
  let logic_data=text;

//  Ajax for saving data
    $.ajax({url: "saveLogic.php?logic="+logic+"&text="+text, success: function(result){
            console.log(result);
    }});
}

