<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktübersicht - Autovermietung</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        min-height: 100vh;
        text-align: center;
        }

        /* Container for the Product Overview  */
        .contact-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        
        /*Navigation Links*/
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        /*Filter Section Styling*/
        .filter-section {
            background: white;      /*Background color inside the box*/
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        /* Change Text color */
        .filter-section label, .filter-section select, .filter-section input {
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
            background: white;
            color: black;
            border: 1px solid #ccc;      /* Border for each Button Box */
            font-size: 0,1rem; 
        }
        /* Button Styling "Search, Reset Filter and Filter all" */
        button {
            
            background:rgb(255, 0, 43);
            color: White;
            font-size: 0,1rem;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-top:10px;
        }
        button:hover {
            transform: scale(1.1);
            background: rgb(200, 0, 35);
        }
       
        
    </style>
</head>
<body>
    
    
    <main>
        <h2 style="text-align: center;">Produktübersicht</h2>
        <section class="filter-section">
            <!-- Filteroptionen für Fahrzeuge -->
            <label for="location">Standort:</label>
            <select id="location" style="width: 10%; height: 35px; padding: 40px;">
                <option value="">-- Standort wählen --</option>
                <option value="Berlin">Berlin</option>
                <option value="Bergedorf">Bergedorf</option>
                <option value="Bremen">Bremen</option>
                <option value="Dresden">Dresden</option>
                <option value="Dortmund">Dortmund</option>
                <option value="Düsseldorf">Düsseldorf</option>
                <option value="Frankfurt">Frankfurt</option>
                <option value="Hamburg">Hamburg</option>
                <option value="Heidelberg">Heidelberg</option>
                <option value="Kiel">Kiel</option>
                <option value="Köln">Köln</option>
                <option value="Leipzig">Leipzig</option>
                <option value="Lübeck">Lübeck</option>
                <option value="München">München</option>
            </select>
            
            <label for="start-date">Startdatum:</label>
            <input type="date" id="start-date" 0,5%; height: 35px; padding: 40px;>
            
            <label for="end-date">Enddatum:</label>
            <input type="date" id="end-date">
            <button onclick="filterCars()">Suchen</button>
            </select>
            
            
            <div class="filter-group">
            <label for="manufacturer">Hersteller:</label>
            <select id="manufacturer" style="width: 0,5%; height: 35px; padding: 40px;">
                <option value="alle">alle</option>
                <option value="BMW">BMW</option>
                <option value="Audi">Audi</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Ford">Ford</option>
                <option value="Range Rover">Range Rover</option>
                <option value="Opel">Opel</option>
                <option value="Maserati">Maserati</option> 
                </select>
            <!-- doors -->
            <label for="doors">Türen:</label>
            <select id="doors" style="width: 0,5%; height: 35px; padding: 40px;">
                <option value="alle">alle</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <!-- Seats -->
        <label for="seats">Sitze:</label>
        <select id="seats" style="width: 0,5%; height: 35px; padding: 40px;">
         <option value="alle">alle</option>
         <option value="2">2</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
        </select>
        <!-- Klima -->
        <label for="airCondition">Klima:</label>
        <select id="airCondition" style="width: 0,5%; height: 35px; padding: 40px;">
          <option value="alle">alle</option>
          <option value="0">0</option>
         <option value="1">1</option>
            </select>

            <!-- GPS -->
        <label for="gps">GPS:</label>
        <select id="gps" style="width: 0,5%; height: 35px; padding: 40px;">
       <option value="alle">alle</option>
      <option value="0">0</option>
      <option value="1">1</option>
    </select>

        <!-- Age -->
        <label for="age">Alter:</label>
       <select id="age" style="width: 0,5%; height: 35px; padding: 40px;">
      <option value="alle">alle</option>
        <option value="neu">Neu</option>
        <option value="gebraucht">Gebraucht</option>
        <option value="älter als 5 Jahre">Älter als 5 Jahre</option>
        <option value="18">18</option>
        <option value="21">21</option>
        <option value="25">25</option>
       </select>

        <!-- Type -->
    <label for="type">Typ:</label>
    <select id="type" style="width: 0,5%; height: 35px; padding: 40px;">
    <option value="alle">alle</option>
    <option value="Limousine">Limousine</option>
    <option value="SUV">SUV</option>
    <option value="Cabrio">Cabrio</option>
    <option value="Combi">Kombi</option>
    <option value="Multi-seater">Mehrsitzer</option>
    <option value="CoupÃ©">CoupÃ©</option>
    
   
    </select>

    <!-- Antrieb -->
    <label for="drive">Antrieb:</label>
    <select id="drive" style="width: 0,5%; height: 35px; padding: 40px;">
    <option value="alle">alle</option>
    <option value="Combuster">Verbrennungsmotor</option>
    <option value="Electric">Elektroantrieb</option>
    </select>

    <!--Getriebe -->
            <label for="transmission">Getriebe:</label>
            <select id="transmission" style="width: 10%; height: 35px; padding: 40px;">
                <option value="alle">alle</option>
                <option value="manuell">Manuell</option>
                <option value="automatik">Automatik</option>
                <option value="NULL">NULL</option>
            </select>
            
            
            <label for="price">Preis bis:</label>
            <input type="number" id="price" min="0">
            
            <label for="cancellation">Stornierung:</label>
            <input type="checkbox" id="cancellation">
            
            
            <button onclick="resetFilters()">Zurücksetzen</button>
            <button onclick="filterCars()">Filtern</button>
        </section>
        
    </main>
    
    
    <script>
function filterCars() {
    console.log("Filter function triggered!"); // Debugging message

    let location = document.getElementById("location").value;
    let startDate = document.getElementById("start-date").value;
    let endDate = document.getElementById("end-date").value;
    let manufacturer = document.getElementById("manufacturer").value;
    let doors = document.getElementById("doors").value;
    let seats = document.getElementById("seats").value;
    let airCondition = document.getElementById("airCondition").value;
    let gps = document.getElementById("gps").value;
    let age = document.getElementById("age").value;
    let type = document.getElementById("type").value;
    let drive = document.getElementById("drive").value;
    let transmission = document.getElementById("transmission").value;
    let price = document.getElementById("price").value;
    let cancellation = document.getElementById("cancellation").checked ? "yes" : "no";

    // Store filters in session storage (optional, useful for reloading)
    const filters = {
        location, startDate, endDate, manufacturer, doors, seats, 
        airCondition, gps, age, type, drive, transmission, price, cancellation
    };
    sessionStorage.setItem("filters", JSON.stringify(filters));

    // Create query string dynamically (prevents errors with empty values)
    let queryParams = new URLSearchParams();

    if (location) queryParams.append("location", location);
    if (startDate) queryParams.append("start-date", startDate);
    if (endDate) queryParams.append("end-date", endDate);
    if (manufacturer !== "alle") queryParams.append("manufacturer", manufacturer);
    if (doors !== "alle") queryParams.append("doors", doors);
    if (seats !== "alle") queryParams.append("seats", seats);
    if (airCondition !== "alle") queryParams.append("airCondition", airCondition);
    if (gps !== "alle") queryParams.append("gps", gps);
    if (age !== "alle") queryParams.append("age", age);
    if (type !== "alle") queryParams.append("type", type);
    if (drive !== "alle") queryParams.append("drive", drive);
    if (transmission !== "alle") queryParams.append("transmission", transmission);
    if (price) queryParams.append("price", price);
    if (cancellation === "yes") queryParams.append("cancellation", cancellation);

    // Redirect to car details page with query parameters
    window.location.href = "cardetail.php?" + queryParams.toString();

}

    

        
     // Reset only the selected filter options (but not location or dates)
function resetFilters() {
    console.log("Reset function triggered!"); // Debugging message

    document.getElementById("manufacturer").value = "alle";
    document.getElementById("doors").value = "alle";
    document.getElementById("seats").value = "alle";
    document.getElementById("airCondition").value = "alle";
    document.getElementById("gps").value = "alle";
    document.getElementById("age").value = "alle";
    document.getElementById("type").value = "alle";
    document.getElementById("drive").value = "alle";
    document.getElementById("transmission").value = "alle";
    document.getElementById("price").value = "";
    document.getElementById("cancellation").checked = false;
}


function resetAll() {
    sessionStorage.removeItem("filters"); // Remove saved filters
    document.getElementById("location").value = "";
    document.getElementById("start-date").value = "";
    document.getElementById("end-date").value = "";
    resetFilters(); // Call the normal reset function
    alert("Alle Filter zurückgesetzt!");
    location.reload(); // Reload the page
}
</script>
</body>
</html>
