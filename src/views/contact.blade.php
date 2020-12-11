<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us Anytime</h1>
    <form action="{{route('contact')}}" method="POST">
        @csrf
        <p><input type="text" name="name" placeholder="Your Name"></p>
        <p><input type="email" name="email" id="" placeholder="Your valid email"></p>
        <p>Message category:
            <select name="category_choice" id="category_choice">
                <option value="complaint">Complaint</option>
                <option value="suggestion">Suggestion</option>
                <option value="Enquiry">Enquiry</option>
                <option value="product-feedback">Product Feedback</option>
            </select>
        </p>
        <p><textarea name="message" id="" cols="30" rows="10" placeholder="Your Query"></textarea>
        <div>
            <button type="submit" value="Submit">Submit</button>
        </div>
    </form>
    
    
</body>
</html>