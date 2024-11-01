<?php 
include "../includes/headers.php";
require "connectDB.php";
$db = connectDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST["id"]) ? $_POST["id"] : null;
    $title = isset($_POST["title"]) ? $_POST["title"] : null; 
    $price = isset($_POST["price"]) ? $_POST["price"] : null;
    $image = isset($_POST["image"]) ? $_POST["image"] : null;
    $description = isset($_POST["description"]) ? $_POST["description"] : null;
    $rooms = isset($_POST["rooms"]) ? $_POST["rooms"] : null;
    $wc = isset($_POST["wc"]) ? $_POST["wc"] : null;
    $garage = isset($_POST["garage"]) ? $_POST["garage"] : null;
    $timestamp = isset($_POST["timestamp"]) ? $_POST["timestamp"] : null;
    $seller = isset($_POST["id_seller"]) ? $_POST["id_seller"] : null;

    $query = "INSERT INTO propierties (title, price, image, description, rooms, wc, garage, timestamp, id_seller) 
    VALUES ('$title', '$price', '$image', '$description', '$rooms', '$wc', '$garage', '$timestamp', '$seller')";

    $response = mysqli_query($db, $query);

    echo $response ? "Insert success" : "Insert failed: " . mysqli_error($db);
    var_dump($response);

    $query_sellers = "SELECT id, name FROM sellers";
    $sellers = mysqli_query($db, $query_sellers);
}
?>

<h2>Properties Form</h2>
<div>
    <form action="crearpropiedades.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Fill all Forms to Create New Property</legend>
            <div>
                <label for="id"></label>
                <input type="number" id="id" name="id" placeholder="ID">
            </div>
            <div>
                <label for="title"></label> <!-- Corregido de "tittle" a "title" -->
                <input type="text" id="title" name="title" placeholder="Title of property">
            </div>
            <div>
                <label for="price"></label>
                <input type="number" id="price" name="price" placeholder="Price">
            </div>
            <div>
                <label for="image"></label>
                <input type="file" id="image" name="image" placeholder="Insert image here">
            </div>
            <div>
                <label for="description"></label>
                <textarea name="description" id="description" placeholder="Description"></textarea>
            </div>
            <div>
                <label for="rooms"></label>
                <input type="number" id="rooms" name="rooms" placeholder="Number of rooms">
            </div>
            <div>
                <label for="wc"></label>
                <input type="number" id="wc" name="wc" placeholder="Number of WC">
            </div>
            <div>
                <label for="garage"></label>
                <input type="number" id="garage" name="garage" placeholder="Number of garages">
            </div>
            <div>
                <label for="timestamp"></label> 
                <input type="date" id="timestamp" name="timestamp">
            </div>
            <div>
                <label for="id_seller"></label>
                <select name="id_seller" id="id_seller">
                    <?php while ($seller = mysqli_fetch_assoc($sellers)): ?>
                        <option value="<?php echo $seller['id']; ?>"><?php echo $seller['name']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div>
                <button type="submit">Create a new property</button>
            </div>
        </fieldset>
    </form>
</div>

<?php include "../includes/footers.php"; ?>
