* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-color: aquamarine;
}

section {
    background-color: rgb(143, 143, 24);
    padding: 20px;
    display: flex;
    flex-direction: column;
    width: 550px;
    border-radius: 6px;
}
section h1{
    text-align: center;
}
section h2{
    text-align: center;
}
form input{
    margin: 5px 0;
    padding: 5px 5px;
    outline: 0;
    border: 2PX solid;
    border-radius: 6PX;
}
form input [type='submit'] {
    background-color: aqua;
    color: black;
    border: 0;
    margin-top: 20px;
    padding: 6px 0;
}
