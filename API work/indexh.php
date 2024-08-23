<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notebook Style Website</title>
    <link rel="stylesheet" href="styles.css">
<style>
   body {
    font-family: 'Arial', sans-serif;
    background-color: #deb887;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.notebook {
    display: flex;
    width: 80%;
    max-width: 1000px;
    height: 600px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
    border-radius: 15px;
    background-color: #f5f5f5;
    overflow: hidden;
    position: relative;
}

.page {
    width: 50%;
    padding: 20px;
    position: relative;
    border: 1px solid #ddd;
}

.left-page {
    border-right: 2px solid #ccc;
    background-color: #fdfdfd;
}

.right-page {
    background-color: #fff;
}

.page-content {
    padding: 30px;
}

h2 {
    font-family: 'Cursive', sans-serif;
    font-size: 28px;
    color: #333;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.buttons {
    display: flex;
    gap: 10px;
}

.button {
    text-decoration: none;
    padding: 10px 20px;
    background-color: #f4b400;
    color: white;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
}

.button:hover {
    background-color: #db8e00;
}

</style>

</head>
<body>
    <div class="notebook">
        <!-- Left Page -->
        <div class="page left-page">
            <div class="page-content">
                <h2>Notebook Tutorial</h2>
                <p>This tutorial demonstrates how to create a website with a notebook style layout using HTML and CSS. The idea is to split the page into two sections that mimic the left and right pages of an open book.</p>
                <p>You can add more content to each page, including text, links, or other elements. This layout is perfect for creating an interactive reading experience for tutorials, portfolios, or blogs.</p>
                <div class="buttons">
                    <a href="#" class="button">Read More</a>
                    <a href="#" class="button">Start Tutorial</a>
                </div>
            </div>
        </div>

        <!-- Right Page -->
        <div class="page right-page">
            <div class="page-content">
                <h2>Creating Interactive Pages</h2>
                <p>The layout is designed to provide a smooth reading experience across both pages. You can customize the content on each side, making it easy to navigate between sections or topics within the same document.</p>
                <p>This kind of design works great for storytelling, showcasing projects, or delivering educational content in a visually appealing manner.</p>
                <div class="buttons">
                    <a href="#" class="button">Article</a>
                    <a href="#" class="button">Demo</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
