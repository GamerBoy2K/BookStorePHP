<?php include 'header.php' ?>

<style>
    .container{
        display: flex;
        justify-content: center;
    }

    /* .aboutMe{
        flex: 1 100%;
    } */

    .techDetails{
        display: flex;
        flex: 2 50%;

    }

    .techBox{
        display: flex;
        flex-direction: column;
    justify-content: flex-start;
    padding: 5%;
    }
</style> 

<div class="container">
    <div class="aboutMe">
        <h1>About Me</h1>
        <h3>Name : Sounak Pal</h3>
        <h5>Roll No : 2182007</h5>
        <h5>Masters of Computer Applications</h5>
        <h5>Heritage Institute of Technology, Kolkata</h5>
    </div>

</div>

<div class="container">

    <div class="techDetails">
        <div class="techBox">
            <h1>Server Details</h1>
            <h4>Cloud Provider : Microsoft Azure</h4>
            <h4>RAM : 1GB </h4>
            <h4>Storage : 5GB</h4>
        </div>

        <div class="techBox">
            <h1>Ubuntu Details : 20.04 LTS</h1>
            <h4>PHP : 7.4.3</h4>
            <h4>Database : MySQL </h4>
            <h4>Server : Apache</h4>
            <h4>PHPmyAdmin Path : ./phpmyadmin</h4>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>