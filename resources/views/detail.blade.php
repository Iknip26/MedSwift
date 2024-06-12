<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: Poppins;
        }

        svg {
            width: 30px;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        button {
            cursor: pointer;
        }

        .container {
            width: 900px;
            margin: auto;
            max-width: 90vw;
            text-align: center;
            padding-top: 10px;
            transition: 0.5s;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .icon-cart {
            position: relative;
        }

        .icon-cart span {
            position: absolute;
            background-color: red;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #fff;
            top: 50%;
            right: -20px;
        }

        .title {
            font-size: xx-large;
        }

        .cartTab {
            width: 400px;
            max-width: 100%;
            background-color: #26355D;
            color: #eee;
            position: fixed;
            top: 0;
            right: 0px;
            bottom: 0;
            display: grid;
            grid-template-rows: 70px 1fr 70px;
        }

        .cartTab h1 {
            padding: 20px;
            margin: 0;
            font-weight: 300;
        }

        .cartTab .btn {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .cartTab button {
            background-color: #7469B6;
            border: none;
            font-family: Poppins;
            font-weight: 500;
            cursor: pointer;
        }

        .cartTab .close {
            background-color: #AD88C6;
        }

        .listCart {
            overflow: auto;
        }

        .listCart::-webkit-scrollbar {
            width: 0;
        }

        /*  */
        .cartTab {
            right: -400px;
            transition: 0.5s;
        }

        body.activeTabCart .cartTab {
            right: 0;
        }

        body.activeTabCart .container {
            transform: translateX(-250px);
        }

        /*  */

        .listProduct {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .listProduct .item {
            background-color: #9999CC;
            padding: 20px;
            border-radius: 20px;
        }

        .listProduct .item h2 {
            font-weight: 500;
            font-size: large;
        }

        .listProduct .item .price {
            letter-spacing: 7px;
            font-size: small;
        }

        .listProduct .item button {
            background-color: #333399;
            color: #eee;
            border: none;
            padding: 5px 10px;
            margin-top: 10px;
            border-radius: 20px;
        }

        /*  */

        .listCart .item img {
            width: 100%;
        }

        .listCart .item {
            display: grid;
            grid-template-columns: 70px 150px 50px 1fr;
            gap: 10px;
            text-align: center;
            align-items: center;
        }

        .listCart .quantity span {
            display: inline-block;
            width: 25px;
            height: 25px;
            background-color: #eee;
            border-radius: 50%;
            color: #555;
            cursor: pointer;
        }

        .listCart .quantity span:nth-child(2) {
            background-color: transparent;
            color: #eee;
            cursor: auto;
        }

        .listCart .quantity {
            display: flex;
        }

        .listCart .item:nth-child(even) {
            background-color: #eee1;
        }

        /*  */

        /* detail page */

        .detail {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            text-align: left;
        }

        .detail .image img {
            width: 100%;
        }

        .detail .image {
            position: relative;
        }

        .detail .image::before {
            position: absolute;
            width: 300px;
            height: 300px;
            content: '';
            background-color: #94817733;
            z-index: -1;
            border-radius: 190px 100px 170px 180px;
            left: calc(50% - 150px);
            top: 50px;

        }

        .detail .name {
            font-size: xxx-large;
            padding: 40px 0 0 0;
            margin: 0 0 10px 0;
        }

        .detail .price {
            font-weight: bold;
            font-size: x-large;
            letter-spacing: 7px;
            margin-bottom: 20px;
        }

        .detail .buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .detail .buttons button {
            background-color: #AD88C6;
            border: none;
            padding: 15px 20px;
            border-radius: 20px;
            font-family: Poppins;
            font-size: large;
            color: #eee;

        }

        .detail .buttons svg {
            width: 15px;
        }

        .detail .buttons span {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin-left: 20px;
        }

        .detail .buttons button:nth-child(2) {
            background-color: #7469B6;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #eee;
        }

        .detail .description {
            font-weight: 300;
        }

        /*  */

        @media only screen and (max-width: 992px) {
            .listProduct {
                grid-template-columns: repeat(3, 1fr);
            }

            .detail {
                grid-template-columns: 40% 1fr;
            }
        }


        /* mobile */
        @media only screen and (max-width: 767px) {
            .listProduct {
                grid-template-columns: repeat(2, 1fr);
            }

            .detail {
                text-align: center;
                grid-template-columns: 1fr;
            }

            .detail .image img {
                width: unset;
                height: 40vh;
            }

            .detail .name {
                font-size: x-large;
                margin: 0;

            }

            .detail .buttons button {
                font-size: small;
            }

            .detail .buttons {
                justify-content: center;
            }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-biru via-slate-200 to-ping h-full">
    <div class="container">
        <header>
            <div class="title">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <h1 class="text-4xl text-med">Med<span class="text-4xl text-swift">Swift</span></h1>
                </a>
            </div>
            <div class="icon-cart">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                </svg>
                <span>0</span>
            </div>
        </header>
        <div id="contentTab">
            <div id="app"></div>
            <div id="temporaryContent">
                <div class="title">PRODUCT DETAIL</div>
                <div class="detail">
                    <div class="image">
                        <img src="">
                    </div>
                    <div class="content">
                        <h1 class="name"></h1>
                        <div class="price"></div>
                        <div class="buttons">
                            <button>Check Out</button>
                            <button class="addCart">Add To Cart
                                <span>
                                    <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 18 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <div class="description"></div>
                    </div>
                </div>

                <div class="title pt-5 pb-5">Similar product</div>
                <div id="listProduct"
                    class="listProduct w-full h-fit py-6 flex flex-row items-center justify-center px-10">

                </div>
            </div>
        </div>
    </div>

    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart"></div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">Check Out</button>
        </div>
    </div>

    <script>
        let app = document.getElementById('app');
        let temporaryContent = document.getElementById('temporaryContent');

        async function fetchProjects() {
            try {
                const response = await fetch(`http://127.0.0.1:8000/api/stoks`);
                data = await response.json();
                // console.log(data);
                id_hospital = data.hospital_id;
                displayProjects(data);
            } catch (error) {
                console.error('Error:', error);
            }
        }


        function displayProjects(items) {
            let projectList = document.getElementById('listProduct');
            projectList.innerHTML = '';

            items.forEach(item => {
                if (item.hospital_id == getHospitalIdFromURL()) {
                    const card = document.createElement('button');
                    card.classList.add('p-4', 'w-64', 'h-[30rem]', 'flex', 'flex-col', 'items-center',
                        'bg-[#AD88C6]',
                        'justofy-center',
                        'bg-white', 'rounded-2xl', 'shadow-md', 'shadow-slate-800');
                    card.setAttribute('onclick', `goToStocks(${item.hospital_id})`);

                    const imageRS = document.createElement("img");
                    imageRS.classList.add('w-64', 'h-64');
                    imageRS.setAttribute('src', item["item"].image_picture);

                    const namaRS = document.createElement("p");
                    namaRS.classList.add('text-xl', 'font-semibold', 'mt-6');
                    namaRS.textContent = item["item"].product_name;

                    const hargaObat = document.createElement("p");
                    hargaObat.classList.add('text-xl', 'font-regular', 'mt-6');
                    hargaObat.textContent = item["item"].price;

                    const buttonAdd = document.createElement('button');
                    buttonAdd.classList.add('py-2', 'px-4', 'bg-blue-800', 'rounded-full', 'my-6', 'text-white',
                        'font-semibold')
                    buttonAdd.textContent = "Add to Cart";


                    card.appendChild(imageRS);
                    card.appendChild(namaRS);
                    card.appendChild(hargaObat);
                    card.appendChild(buttonAdd);
                    projectList.appendChild(card);
                }

            });
        }

        function getHospitalIdFromURL() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('hospital_id');
        }

        function goToDetail(id) {
            window.location.href = "{{ route('drug.show', ['hospital_id' => '']) }}" + id;
        }

        fetchProjects();
    </script>
</body>

</html>
