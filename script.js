const dropdowns = document.querySelectorAll(".location select");
const btn = document.querySelector("form button");

for(let select of dropdowns){
    for(state in india)
    {
        var arr=india[state];
        for(var value in arr)
        {
            let add=state+", "+arr[value];
            let newOption=document.createElement("option");
            newOption.innerText=add;
            newOption.value=add;
            select.append(newOption);
         }
    }  
}