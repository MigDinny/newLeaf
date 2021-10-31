let obj;

function fetchData() {
    const url = "/api/search.php";

    const params = {
        type: "job",
    }
    
    res = axios.get(url, params)
    .then(data => updateData(data.data))
    .catch(err => console.error(err));
}

function updateData(jsonResponseObj) {
    obj = jsonResponseObj;

    jsonResponseObj.forEach((row, index) => {
        
        // add HTML row to the content

    });
}

