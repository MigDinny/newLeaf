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
let d;

/**
 * connects to the API and calls updateData() when the data arrives.
 * 
 * This function must be called at least once after the page is loaded.
 * This function must be called WHENEVER a list-reload is necessary.
 * 
 */
function fetchData(section, course_id_param, salary_param, location_param, remote_param, graduation_req_param) {
    const url = "/api/search.php";

    if(salary_param == undefined ){
        salary_param = 0;
    }

    if( location_param == undefined ){
        location_param = "";
    }

    if(remote_param == undefined){
        remote_param = "";
    }

    if(graduation_req_param == undefined){
        graduation_req_param = "";
    }

    let get_params = {
        type: section,
        course_id: course_id_param,
        salary:salary_param,
        location:location_param,
        remote:remote_param,
        graduation_requirements:graduation_req_param,
    }
    
    res = axios.get(url, {params: get_params})
    .then(data => updateData(data.data, section, data))
    .catch(err => console.error(err));
}

/**
 * This function is called by fetchData() and updates the HTML list with the new fetched data.
 * 
 * @param {jsonObject} jsonResponseObj data returned by the API
 */
function updateData(jsonResponseObj, section, test) {
    d = test;
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
        innerHTML += "<span><b>Localização:</b> " + row.location + "</span><br>";
        innerHTML += "<span><b>Empresa:</b> " + row.company + "</span><br>";
        innerHTML += "<span><b>Salário bruto:</b> " + row.salary + "</span><br>";
        innerHTML += "<span><b>Requisitos Académicos:</b> " + row.graduation_requirements + "</span><br>";
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
