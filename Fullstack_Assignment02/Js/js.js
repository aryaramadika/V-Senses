const countries = document.querySelector('datalist');
const search = document.querySelector('#src');
const date = document.querySelector('#date');
const nameCountry = document.querySelector('#name-country');
const totconfirmed = document.querySelector('.confirmed');
const totdeaths = document.querySelector('.deaths');
const totrecovered = document.querySelector('.recovered');
const chart = document.querySelector('.chart');


let dataChart = [];

const API_URL = 'https://coronavirus-tracker-api.herokuapp.com/v2/locations/147';
async function covid() {
    const res = await fetch(API_URL);
    console.log(res);
    const data = await res.json();
    console.log(data);

    if (res.status === 4 || res.status === 200) {
        date.textContent = new Date(data.location.last_updated).toDateString();

        console.log(data.location)
        const { confirmed, deaths, recovered } = data.location.latest;
        // console.log(confirmed);
        totconfirmed.children[1].textContent = confirmed.toLocaleString('en');

        totdeaths.children[1].textContent = deaths.toLocaleString('en');

        totrecovered.children[1].textContent = recovered;



    } else {
        chart.innerHTML = `<h2>Loading......</h2>`
    }
}
setTimeout(covid, 43200000) // update every 12 hours
covid();

var MenuItems = document.getElementById("MenuItems");
function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
        MenuItems.style.marginTop = "35px";
    }
    else {
        MenuItems.style.maxHeight = "0px";
    }

}



// var MenuItems = document.getElementById("MenuItems");
// MenuItems.style.maxHeight = "0px";
// function menutoggle() {
//     if (MenuItems.style.maxHeight == "0px") {
//         MenuItems.style.maxHeight = "200px";
//     }
//     else {
//         MenuItems.style.maxHeight = "0px";
//     }

// }

// window.onload = function () {
//     getCovidStats();
// }

// function getCovidStats() {
//     fetch('https://coronavirus-tracker-api.herokuapp.com/v2/locations/147')
//         .then(function (resp) { return resp.json() })
//         .then(function (data) {
//             let population = data.location.country_population;
//             let update = data.location.last_updated;
//             let confirmedCases = data.location.latest.confirmed;
//             let deaths = data.location.latest.deaths;

//             document.getElementById('population').innerHTML = population.toLocaleString('en');
//             document.getElementById('update').innerHTML = update.substr(0, 10);
//             document.getElementById('cases').innerHTML = confirmedCases.toLocaleString('en');
//             document.getElementById('deaths').innerHTML = deaths.toLocaleString('en');
//             document.getElementById('percent').innerHTML = ((Number(deaths) / Number(confirmedCases)) * 100).toLocaleString("en", { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + "%";




//         })
//         .catch(function () {
//             console.log("error");
//         })
//     setTimeout(getCovidStats, 43200000) // update every 12 hours
// }

