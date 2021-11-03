document.addEventListener('DOMContentLoaded', ()=>{
    const select = document.getElementById('countries');

    fetch('https://restcountries.com/v2/all').then(res=>{
        return res.json();
    }).then(countries =>{
        let output = "";
        countries.forEach(country =>{
            output += `<option value=">${country.name}">${country.name} </option>`;
        }) 
        select.innerHTML = output;
    }).catch(error => {
        console.log(error);
    })
});
