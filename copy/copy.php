<script>
    // user after select copy
    // use basic text
    document.execCommand("copy");

    // click copy
    // use input type=text | textarea
    let obj = document.getElementById("text");

    obj.select(); // input select
    obj.setSelectionRange(0, 99999); // for mobile

    document.execCommand("copy");
    obj.setSelectionRange(0,0); //select reset

        // make textarea and copy
        function copy(val){
            const make = document.createElement("textarea");
            document.body.appendChild(make);
            make.value = val;
            make. select();
            document.execCommand("copy");
            document.body.removeChild(make);
        }
        //
        document.querySelector(".copy").addEventListener("click", function(){});

        copy2(){
            copy("val");
        }
        onclick(){copy2();}

    // after select copy
    let obj = document.getElementById("text");

    let range = document.createRange();
    range.selectNode(obj.childNodes[0]); // save text in Range obj

    let sel = window.getSelection();
    sel.removaAllRanges(); // reset
    sel.addRange(range); // select text
    
    document.execCommand("copy"); // copy
    sel.removeRange(range); // del select 

    // when user copy alert
    // use oncopy
    // tag || obj.oncopy || obj.addEventListener("copy", fun());
</script>