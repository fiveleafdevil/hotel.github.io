<!DOCTYPE html>
<html>

<head>
     <title>Hotel Booking Page</title>
     <link rel="stylesheet" href="style1.css">
</head>

<body>
     <header>
          <h1>Hotel Booking Page</h1>
     </header>
     <img src="g-2.jpg" alt="image">
     <main>

          <form method="post" action="booking.php">
               <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
               </div>
               <div>
                    <label for="NO OF guests">NO OF guests:</label>
                    <input type="number" id="noof_guests" name="noof_guests" required>
               </div>

               
                    <div>
                         <label for="checkin" ;>Check-in date:</label>
                         <input type="date" id="checkin" name="checkin" required>
                    </div>
                    <div>
                         <label for="checkout">Check-out date:</label>
                         <input type="date" id="checkout" name="checkout" required>
                    </div>
          
                    <input type="submit" value="book now" class="btn" name="btn-booknow">
          
          </form>
   



     </main>
     <footer>
          <p>&copy; 2023 Hotel Booking Page</p>
     </footer>
</body>

</html>