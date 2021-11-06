/**
 * LIST FETCH
 * 
 * This script is made of two main functions. More details below.
 * 
 * This script needs to be declared after the associated HTML page is loaded.
 * 
 * Currently, only these 3 pages need this script:
 * 
 *  - research.php (bolsas)
 *  - jobs.php (empregos)
 *  - internships.php (estágios)
 * 
 */

let obj;
let ul;

/**
 * connects to the API and calls updateData() when the data arrives.
 * 
 * This function must be called at least once after the page is loaded.
 * This function must be called WHENEVER a list-reload is necessary.
 * 
 */
function fetchData() {
    const url = "/api/search.php";

    const params = {
        type: "job",
    }
    
    res = axios.get(url, params)
    .then(data => updateData(data.data))
    .catch(err => console.error(err));
}

/**
 * This function is called by fetchData() and updates the HTML list with the new fetched data.
 * 
 * @param {jsonObject} jsonResponseObj data returned by the API
 */
function updateData(jsonResponseObj) {
    ul = document.getElementById("entry-list");
    obj = jsonResponseObj;

    // clear previous results
    ul.innerHTML = "";

    let innerHTML = "";
    let li;

    jsonResponseObj.forEach((row, index) => {
        innerHTML = "";

        // add HTML row to the content
        innerHTML += "<h3>" + row.name + "</h3>";
        innerHTML += "<span><b>Localização:</b> " + "</span><br>";
        innerHTML += "<span><b>Empresa:</b> " + row.company + "</span><br>";
        innerHTML += "<span><b>Salário bruto:</b> " + row.salary + "</span><br>";
        innerHTML += "<span><b>Requisitos Académicos:</b> " + row['graduation-requirements'] + "</span><br>";
        innerHTML += "<span><b>Remote: </b> " + row.remote + "</span><br>";

        // create element
        li = document.createElement("li");
        li.classList.add("entry-row");

        // populate li
        li.innerHTML = innerHTML;
        
        // append element
        ul.appendChild(li);


    });
}

// call for the first time
fetchData();