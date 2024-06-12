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

<body class="w-full h-full flex flex-col">
    <header class="w-full h-fit p-10 px-12 bg-white flex flex-row">
        <div class="title">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <h1 class="text-5xl text-med">Med<span class="text-4xl text-swift">Swift</span></h1>
            </a>
        </div>

        <div class="icon-cart h-10 flex flex-row justify-end w-full">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
            </svg>
            {{-- <span
                class="mt-4 w-6 h-6 flex flex-row justify-center items-center bg-red-500 p-1 rounded-full text-white text-sm ms-[-10px]">3</span> --}}

            <svg class="ms-10" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                fill="none">
                <g clip-path="url(#clip0_36_35)">
                    <path
                        d="M22 0C9.86883 0 0 9.86883 0 22C0 34.1312 9.86883 44 22 44C34.1312 44 44 34.1312 44 22C44 9.86883 34.1312 0 22 0ZM14.6667 38.8007V38.5C14.6667 34.4557 17.9557 31.1667 22 31.1667C26.0443 31.1667 29.3333 34.4557 29.3333 38.5V38.8007C27.0857 39.7852 24.607 40.3333 22 40.3333C19.393 40.3333 16.9143 39.7852 14.6667 38.8007ZM32.8625 36.7602C32.0265 31.5187 27.4743 27.5 22 27.5C16.5257 27.5 11.9753 31.5187 11.1375 36.7602C6.60917 33.418 3.66667 28.0463 3.66667 22C3.66667 11.891 11.891 3.66667 22 3.66667C32.109 3.66667 40.3333 11.891 40.3333 22C40.3333 28.0463 37.3908 33.418 32.8625 36.7602ZM22 9.16667C17.9557 9.16667 14.6667 12.4557 14.6667 16.5C14.6667 20.5443 17.9557 23.8333 22 23.8333C26.0443 23.8333 29.3333 20.5443 29.3333 16.5C29.3333 12.4557 26.0443 9.16667 22 9.16667ZM22 20.1667C19.9778 20.1667 18.3333 18.5222 18.3333 16.5C18.3333 14.4778 19.9778 12.8333 22 12.8333C24.0222 12.8333 25.6667 14.4778 25.6667 16.5C25.6667 18.5222 24.0222 20.1667 22 20.1667Z"
                        fill="#000000">
                </g>
                <defs>
                    <clipPath id="clip0_36_35">
                        <rect width="44" height="44" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>
    </header>

    <div class=" bg-gradient-to-r from-[#e4f6ff] to-white w-full h-fit flex flex-col items-center py-10">
        <p class="text-5xl font-semibold mt-20">AVAIBLE PRODUCTS</p>
        <div id="listProduct"
            class="w-full h-fit py-6 flex flex-row items-center justify-center px-10 mt-12 flex-wrap space-x-20">

        </div>
    </div>

</body>



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
                    'bg-[#9999CB]',
                    'justofy-center',
                    'bg-white', 'rounded-2xl', 'shadow-md', 'shadow-slate-800');
                card.setAttribute('onclick', `goToDetail(${item.hospital_id},${item["item"].id})`);

                const imageRS = document.createElement("img");
                imageRS.classList.add('w-64', 'h-64');
                imageRS.setAttribute('src', item["item"].image_picture);

                const namaRS = document.createElement("p");
                namaRS.classList.add('text-xl', 'font-semibold', 'mt-6');
                namaRS.textContent = item["item"].product_name;

                const hargaObat = document.createElement("p");
                hargaObat.classList.add('text-xl', 'font-regular', 'mt-6');
                hargaObat.textContent = `RP ${parseFloat(item['item'].price).toFixed(0)}`;

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

    function goToDetail(id_hospital, id_item) {
        const params = {
            product_id: id_item,
            hospital_id: id_hospital
        };

        const url = new URL("{{ route('stock.Product_detail') }}");
        Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

        window.location.href = url.toString();
    }

    fetchProjects();
</script>

</html>
