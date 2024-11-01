<?php
    include "../includes/headers.php";
    require "connectDB.php";

    $db = connectDB();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $seller_id=$_POST['seller_id'];
        $property_id=$_POST['property_id'];
        $sale_date=$_POST['sale_date'];

        $query="INSERT INTO sales(seller_id, property_id, sale_date) VALUES ($seller_id, $property_id, '$sale_date');";

        try {
                $response = mysqli_query($db, $query);
                if ($response) {
                    echo "<p>Sale recorded!<p>";
                } else {
                    throw new Exception("Sale not recorded: " . mysqli_error($db));
                }
        } catch (Exception  $e) {
            echo "<p>Error: {$e->getMessage()}<p>";
        }
    }

    try {
        $querySeller = "SELECT id, name FROM seller;";
        $queryProperty = "SELECT id, title FROM propierties;";

        $sellers = mysqli_query($db, $querySeller);
        $properties = mysqli_query($db, $queryProperty);
        
        if (!$sellers || !$properties) {
            throw new Exception("Error: " . mysqli_error($db));
        }
    } catch (Exception $e) {
        echo "<p>Error: {$e->getMessage()}</p>";
    }
?>

<section>
    <h2>Sales Form</h2>
    <div>
        <form action="crearVentas.php" method="post">
            <fieldset>
                <legend>Fill all Fields to Create a New Sale</legend>
                <div>
                    <label for="seller_id">Select the seller: </label>
                    <select name="seller_id" id="seller_id">
                        <?php while ($seller = mysqli_fetch_assoc($sellers)) { ?>
                            <option value="<?php echo $seller['id']; ?>"><?php echo $seller['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="property_id">Select the property: </label>
                    <select name="property_id" id="property_id">
                        <?php while ($property = mysqli_fetch_assoc($properties)) { ?>
                            <option value="<?php echo $property['id']; ?>"><?php echo $property['title']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="sale_date">Sale Date: </label>
                    <input required type="date" id="sale_date" name="sale_date" value="<?php echo date("Y-m-d")?>">
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
include "../includes/footers.php";
?>