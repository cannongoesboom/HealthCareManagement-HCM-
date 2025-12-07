<?php
session_start();
require_once 'config/config.php';

$_SESSION['email'] = $_POST['email'] ?? '';

// Process when POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $visit_reason = $_POST['visit_reason'];
    $self_harm = $_POST['self_harm'];
    $symptoms = $_POST['symptoms'];
    $symptoms_before = $_POST['symptoms_before'];
    $medical_conditions = $_POST['medical_conditions'];
    $medications = $_POST['medications'];
    $has_allergies = $_POST['has_allergies'];
    $allergies = $_POST['allergies'];
    $has_insurance = $_POST['has_insurance'];
    $insurance = $_POST['insurance'];
    $had_surgeries = $_POST['had_surgeries'];
    $surgeries = $_POST['surgeries'];
    $fam_disease = $_POST['fam_disease'];
    $fam_diseases = $_POST['fam_diseases'];
    $use_tobacco = $_POST['use_tobacco'];
    $tobacco_usage = $_POST['tobacco_usage'];
    $drink_alcohol = $_POST['drink_alcohol'];
    $alcohol_usage = $_POST['alcohol_usage'];
    $spiritual_beliefs = $_POST['spiritual_beliefs'];
    $what_spiritual_beliefs = $_POST['what_spiritual_beliefs'];
    $pt_consent = $_POST['pt_consent'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $street_address = $_POST['street_address'];
    $home_city = $_POST['home_city'];
    $home_state = $_POST['home_state'];
    $home_zip = $_POST['home_zip'];
    $pt_phone = $_POST['pt_phone'];
    $email = $_POST['email'];
    $pt_dob = $_POST['pt_dob'];
    $pt_notes = $_POST['pt_notes'];

    // REAL prepared statement with placeholders
    $sql = "INSERT INTO patients 
    (
        visit_reason, self_harm, symptoms, symptoms_before, medical_conditions, 
        medications, has_allergies, allergies, has_insurance, insurance,
        had_surgeries, surgeries, fam_disease, fam_diseases, use_tobacco,
        tobacco_usage, drink_alcohol, alcohol_usage, spiritual_beliefs,
        what_spiritual_beliefs, pt_consent, fname, lname, street_address,
        home_city, home_state, home_zip, pt_phone, email, pt_dob, pt_notes
    )
    VALUES
    (
        :visit_reason, :self_harm, :symptoms, :symptoms_before, :medical_conditions,
        :medications, :has_allergies, :allergies, :has_insurance, :insurance,
        :had_surgeries, :surgeries, :fam_disease, :fam_diseases, :use_tobacco,
        :tobacco_usage, :drink_alcohol, :alcohol_usage, :spiritual_beliefs,
        :what_spiritual_beliefs, :pt_consent, :fname, :lname, :street_address,
        :home_city, :home_state, :home_zip, :pt_phone, :email, :pt_dob, :pt_notes
    )";

    try {
        $stmt = $db_con->prepare($sql);

        // Bind parameters
        $stmt->bindParam(":visit_reason", $visit_reason);
        $stmt->bindParam(":self_harm", $self_harm);
        $stmt->bindParam(":symptoms", $symptoms);
        $stmt->bindParam(":symptoms_before", $symptoms_before);
        $stmt->bindParam(":medical_conditions", $medical_conditions);
        $stmt->bindParam(":medications", $medications);
        $stmt->bindParam(":has_allergies", $has_allergies);
        $stmt->bindParam(":allergies", $allergies);
        $stmt->bindParam(":has_insurance", $has_insurance);
        $stmt->bindParam(":insurance", $insurance);
        $stmt->bindParam(":had_surgeries", $had_surgeries);
        $stmt->bindParam(":surgeries", $surgeries);
        $stmt->bindParam(":fam_disease", $fam_disease);
        $stmt->bindParam(":fam_diseases", $fam_diseases);
        $stmt->bindParam(":use_tobacco", $use_tobacco);
        $stmt->bindParam(":tobacco_usage", $tobacco_usage);
        $stmt->bindParam(":drink_alcohol", $drink_alcohol);
        $stmt->bindParam(":alcohol_usage", $alcohol_usage);
        $stmt->bindParam(":spiritual_beliefs", $spiritual_beliefs);
        $stmt->bindParam(":what_spiritual_beliefs", $what_spiritual_beliefs);
        $stmt->bindParam(":pt_consent", $pt_consent);
        $stmt->bindParam(":fname", $fname);
        $stmt->bindParam(":lname", $lname);
        $stmt->bindParam(":street_address", $street_address);
        $stmt->bindParam(":home_city", $home_city);
        $stmt->bindParam(":home_state", $home_state);
        $stmt->bindParam(":home_zip", $home_zip);
        $stmt->bindParam(":pt_phone", $pt_phone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pt_dob", $pt_dob);
        $stmt->bindParam(":pt_notes", $pt_notes);

        // Execute
        $stmt->execute();
        header("Location: thankyou.php");
        exit;

    } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
    }
}
?>