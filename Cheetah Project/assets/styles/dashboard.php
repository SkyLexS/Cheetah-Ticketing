<style>
    body{
        background-color: #292727;
    }
    #main-content h3{
        padding-left: 1rem;
        margin-bottom: 0;
        text-transform: uppercase;
    }

    #status, #user, #admin{
        display: flex;
        flex-wrap: wrap;
    }
    #admin,h4{
        color: white;
    }
    .info-box{
        padding: 0.3rem 1rem;
        border-left: 4px solid;
        margin: 1rem;
        flex-basis: 45%;
        border-radius: 5px;
        box-shadow: 7px 7px 4px rgba(0, 0, 0, 0.25);
        background-color: black;
    }
    .info-box p{
        color: white;
    }

    .heading{
        display: flex;
        justify-content: space-between;
    }
    .heading h5{
        color: white;
        text-align: center;
        padding: 0.5rem 1rem;
        flex-basis: 70%;
        border-radius: 0px;
        margin: 0.5rem 0;
    }

    .info-box p{
        margin: 0;
    }

    .info-content{
        margin-bottom: 1rem;
    }

    .info-content .num{
        font-size: 1.5rem;
    }

    .info-box a{
        display: block;
        text-align: right;
        text-decoration: none;
        font-weight: bold;
    }
    /* START-hardcoding */
    #Booking{
        border-color: #DC5F00;
    }

    #Booking h5{
        background-color: #DC5F00;
    }

    #Booking a{
        color: #DC5F00;
    }

    #Earning {
        border-color: #59CE8F;
    }

    #Earning h5{
        background-color:#59CE8F;
    }

    #Earning a{
        color: #59CE8F;
    }

    #Bus {
        border-color: #810CA8;
    }

    #Bus h5{
        background-color: #810CA8;
    }

    #Bus a{
        color: #810CA8;
    }

    #Route{
        border-color: #f44336;
    }

    #Route h5{
        background-color: #f44336;
    }

    #Route a{
        color: #f44336;
    }

    #Seat{
        border-color: #8758FF;
    }

    #Seat h5{
        background-color: #8758FF;
    }

    #Seat a{
        color: #8758FF;
    }

    #Customer{
        border-color: #0F3D3E;
    }

    #Customer h5{
        background-color: #0F3D3E;
    }

    #Customer a{
        color: #0F3D3E;
    }

    #Admin{
        border-color: #630000;
    }

    #Admin h5{
        background-color: #630000;
    }

    #Admin a{
        color: #630000;
    }
    /* END-hardcoding */


    #admin .info-box{
        text-align: center;
        padding: 1rem 0;
        border: none;
    }

    #admin h4{
        margin: 0.5rem 0;
    }

    #admin img{
        border-radius: 50%;
    }


    @media only screen and (min-width:1000px){
        #main-content{
            flex-grow: 1;
        }

        .info-box{
            flex-basis: 20%;
        }

        #admin .info-box{
            flex-basis: 15%;
        }
    }
</style>