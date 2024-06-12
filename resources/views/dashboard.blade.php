<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <span
                class="mt-4 w-6 h-6 flex flex-row justify-center items-center bg-red-500 p-1 rounded-full text-white text-sm ms-[-10px]">3</span>\
            <svg class="ms-10" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                <g clip-path="url(#clip0_36_35)">
                    <path
                        d="M22 0C9.86883 0 0 9.86883 0 22C0 34.1312 9.86883 44 22 44C34.1312 44 44 34.1312 44 22C44 9.86883 34.1312 0 22 0ZM14.6667 38.8007V38.5C14.6667 34.4557 17.9557 31.1667 22 31.1667C26.0443 31.1667 29.3333 34.4557 29.3333 38.5V38.8007C27.0857 39.7852 24.607 40.3333 22 40.3333C19.393 40.3333 16.9143 39.7852 14.6667 38.8007ZM32.8625 36.7602C32.0265 31.5187 27.4743 27.5 22 27.5C16.5257 27.5 11.9753 31.5187 11.1375 36.7602C6.60917 33.418 3.66667 28.0463 3.66667 22C3.66667 11.891 11.891 3.66667 22 3.66667C32.109 3.66667 40.3333 11.891 40.3333 22C40.3333 28.0463 37.3908 33.418 32.8625 36.7602ZM22 9.16667C17.9557 9.16667 14.6667 12.4557 14.6667 16.5C14.6667 20.5443 17.9557 23.8333 22 23.8333C26.0443 23.8333 29.3333 20.5443 29.3333 16.5C29.3333 12.4557 26.0443 9.16667 22 9.16667ZM22 20.1667C19.9778 20.1667 18.3333 18.5222 18.3333 16.5C18.3333 14.4778 19.9778 12.8333 22 12.8333C24.0222 12.8333 25.6667 14.4778 25.6667 16.5C25.6667 18.5222 24.0222 20.1667 22 20.1667Z"
                        fill="#000000" />
                </g>
                <defs>
                    <clipPath id="clip0_36_35">
                        <rect width="44" height="44" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>
    </header>

    <div class=" bg-gradient-to-r from-[#e4f6ff] to-white w-full flex flex-col items-center">
        <div
            class="w-full flex flex-col items-center justify-center bg-gradient-to-br from-biru via-slate-200 to-ping relative">
            <img src="../img/top-view-pills-cure-removebg-preview 1.png" class="w-2/3 h-1/4 ml-auto">
            <div class="absolute top-20 left-32">
                <h5 class="text-6xl font-semibold tracking-tight mb-4">
                    Optimize your Healthcare: <br> Easily order Prescription <br> Medications!
                </h5>
            </div>
        </div>



        <div class="mt-10">
            <p class="text-4xl font-semibold text-gray-900 mt-10 ml-48">Choose Your Hospital</p>
        </div>

        <div id="hospital-data-container"
            class="flex flex-row justify-center items-center auto-cols-min mt-10 space-x-20 mb-16">
            <!-- Data will be appended here -->
        </div>
    </div>
</body>

</html>

<script>
    let id_hospital;
    let listRumahSakit = [];

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
        const projectList = document.getElementById('hospital-data-container');
        projectList.innerHTML = '';

        items.forEach(item => {
            if (!listRumahSakit.includes(item.hospital.name)) {
                listRumahSakit[listRumahSakit.length] = item.hospital.name;
                const card = document.createElement('button');
                card.classList.add('p-4', 'w-fit', 'h-fit', 'flex', 'flex-col', 'items-center',
                    'justofy-center',
                    'bg-white', 'rounded-2xl', 'shadow-md', 'shadow-slate-800');
                card.setAttribute('onclick', `goToStocks(${item.hospital_id})`);


                const imageRS = document.createElement("img");
                imageRS.classList.add('w-64', 'h-64');
                imageRS.setAttribute('src', item["hospital"].logo);

                const namaRS = document.createElement("p");
                namaRS.classList.add('text-xl', 'font-semibold', 'mt-6');
                namaRS.textContent = item["hospital"].name;

                card.appendChild(imageRS);
                card.appendChild(namaRS);
                projectList.appendChild(card);
            }


        });
    }

    function goToStocks(id) {
        console.log(`xuadbayd${id}`)
        window.location.href = "{{ route('stock.detail', ['hospital_id' => '']) }}" + id;
    }

    fetchProjects();
</script>
