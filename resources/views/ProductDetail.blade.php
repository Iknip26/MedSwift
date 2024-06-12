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
        <p class="text-5xl font-semibold">PRODUCT DETAIL</p>

        <div class="flex flex-row w-full justify-center mt-16 space-x-20">
            <div class="">
                <img id="image_obat" class="w-[30rem] h-auto rounded-full" src="" alt="">
            </div>

            <div id="deskripsi_obat" class="flex flex-col">
                <p id="nama_obat" class="text-8xl w-64 space-y-4"></p>
                <p id="harga_obat" class="text-4xl font-semibold mt-4"></p>
                <div class="flex flex-row space-x-6 mt-6">
                    <button class="py-4 px-6 bg-[#A884C1] rounded-3xl text-xl text-white">Check Out</button>
                    <button class="py-4 px-6 bg-[#7469B7] rounded-3xl text-xl text-white">Add to Cart
                        <svg class=" inline" xmlns="http://www.w3.org/2000/svg" width="26" height="24"
                            viewBox="0 0 26 24" fill="none">
                            <g clip-path="url(#clip0_351_356)">
                                <path
                                    d="M24.6057 4.077C24.301 3.73944 23.9195 3.46795 23.4883 3.28181C23.0571 3.09568 22.5868 2.99946 22.1108 3H4.5955L4.55 2.649C4.45689 1.91942 4.077 1.24673 3.48236 0.758478C2.88773 0.270223 2.11968 0.000341793 1.32383 0L1.08333 0C0.796015 0 0.520465 0.105357 0.317301 0.292893C0.114137 0.48043 0 0.734783 0 1C0 1.26522 0.114137 1.51957 0.317301 1.70711C0.520465 1.89464 0.796015 2 1.08333 2H1.32383C1.58918 2.00003 1.84528 2.08996 2.04357 2.25272C2.24186 2.41547 2.36854 2.63975 2.39958 2.883L3.89025 14.583C4.04501 15.7998 4.67835 16.9218 5.67007 17.736C6.66178 18.5502 7.94284 19 9.27008 19H20.5833C20.8706 19 21.1462 18.8946 21.3494 18.7071C21.5525 18.5196 21.6667 18.2652 21.6667 18C21.6667 17.7348 21.5525 17.4804 21.3494 17.2929C21.1462 17.1054 20.8706 17 20.5833 17H9.27008C8.59956 16.9983 7.94603 16.8051 7.3991 16.4471C6.85216 16.089 6.43859 15.5835 6.21508 15H19.1284C20.3984 15.0001 21.628 14.5882 22.6025 13.8364C23.5769 13.0846 24.2342 12.0407 24.4595 10.887L25.3099 6.533C25.3948 6.10101 25.3757 5.65707 25.254 5.23264C25.1323 4.80821 24.911 4.41368 24.6057 4.077ZM23.1833 6.178L22.3318 10.532C22.1966 11.225 21.8015 11.852 21.2158 12.3032C20.6302 12.7544 19.8913 13.0011 19.1284 13H5.87058L4.85117 5H22.1108C22.27 4.99912 22.4274 5.03062 22.5718 5.09225C22.7163 5.15389 22.8443 5.24415 22.9466 5.35661C23.049 5.46907 23.1233 5.60097 23.1642 5.74294C23.2051 5.8849 23.2117 6.03344 23.1833 6.178Z"
                                    fill="white" />
                                <path
                                    d="M7.58317 24C8.77979 24 9.74984 23.1046 9.74984 22C9.74984 20.8954 8.77979 20 7.58317 20C6.38655 20 5.4165 20.8954 5.4165 22C5.4165 23.1046 6.38655 24 7.58317 24Z"
                                    fill="white" />
                                <path
                                    d="M18.4167 24C19.6133 24 20.5833 23.1046 20.5833 22C20.5833 20.8954 19.6133 20 18.4167 20C17.22 20 16.25 20.8954 16.25 22C16.25 23.1046 17.22 24 18.4167 24Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_351_356">
                                    <rect width="26" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
                <p id="desc_obat" class="w-[30rem] mt-8"></p>

                {{-- <p id="komposisi_obat" class="w-[30rem] mt-8">komposisi</p>
                <p id="useGuide_obat" class="w-[30rem] mt-8">Aturan Pakai</p> --}}

            </div>
        </div>

        <p class="text-5xl font-semibold mt-24 mb-6">OTHER PRODUCT</p>
        <div id="listProduct"
            class="listProduct w-full h-fit py-6 flex flex-row items-center justify-center px-10 space-x-16">

        </div>
    </div>

    <script>
        async function fetchProjects() {
            try {
                const response = await fetch(`http://127.0.0.1:8000/api/stoks`);
                const response2 = await fetch(`http://127.0.0.1:8000/api/drug/${getProductIdFromURL}`);
                data_product = await response.json();
                data_obat = await response2.json();

                displayProjects(data_product);
                insertDataObat(data_product, data_obat);
            } catch (error) {
                console.error('Error:', error);
            }
        }

        function insertDataObat(items, items2) {
            const imageObat = document.getElementById('image_obat');
            const namaObat = document.getElementById('nama_obat');
            const hargaObat = document.getElementById('harga_obat');
            const descObat = document.getElementById('desc_obat');

            const container_detail_obat = document.getElementById('deskripsi_obat');


            items.forEach(item => {
                // console.log(item);
                if (item["item"].id == getProductIdFromURL()) {
                    imageObat.setAttribute("src", item['item'].image_picture);
                    namaObat.textContent = item['item'].product_name;
                    hargaObat.textContent = `RP ${parseFloat(item['item'].price).toFixed(0)}`;
                    descObat.textContent = item['item'].description;
                }
            });
        }


        function displayProjects(items) {
            let projectList = document.getElementById('listProduct');
            projectList.innerHTML = '';

            items.forEach(item => {
                if (item.hospital_id == getHospitalIdFromURL() && item['item'].id != getProductIdFromURL()) {
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

        function getProductIdFromURL() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('product_id');
        }



        fetchProjects();
    </script>
</body>

</html>
