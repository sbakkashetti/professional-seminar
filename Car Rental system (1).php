<?php
// Define Reservation class to encapsulate reservation-related functionalities
class Reservation {
    private $reservationId;
    private $customerId;
    private $carId;
    private $startDate;
    private $endDate;

    // Constructor to initialize reservation attributes
    public function __construct($reservationId, $customerId, $carId, $startDate, $endDate) {
        $this->reservationId = $reservationId;
        $this->customerId = $customerId;
        $this->carId = $carId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    // Method to create a new reservation
    public function createReservation() {
        // Database logic to insert reservation details into the database
        // Placeholder code for demonstration purposes
        echo "Reservation created successfully. Reservation ID: " . $this->reservationId;
    }

    // Method to cancel an existing reservation
    public function cancelReservation() {
        // Database logic to delete reservation from the database
        // Placeholder code for demonstration purposes
        echo "Reservation canceled successfully. Reservation ID: " . $this->reservationId;
    }

    // Method to retrieve reservation details
    public function getReservationDetails() {
        // Database logic to fetch reservation details from the database
        // Placeholder code for demonstration purposes
        $reservationDetails = "Reservation ID: " . $this->reservationId . ", Customer ID: " . $this->customerId . ", Car ID: " . $this->carId . ", Start Date: " . $this->startDate . ", End Date: " . $this->endDate;
        return $reservationDetails;
    }
}

// Sample usage of Reservation class
$reservation = new Reservation(1234, 1001, 2001, "2024-02-15", "2024-02-20");
$reservation->createReservation();
echo "<br>";
echo $reservation->getReservationDetails();
echo "<br>";
$reservation->cancelReservation();
?>
