<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="bg-gradient-to-r from-blue-50 to-purple-50 min-h-screen relative">
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b py-4">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <h1 class="text-4xl text-med">Med<span class="text-4xl text-swift">Swift</span></h1>
            </a>

            <div class="flex flex-row md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button class="me-6" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38"
                        fill="none">
                        <g clip-path="url(#clip0_36_39)">
                            <path
                                d="M35.9622 6.45525C35.5169 5.92078 34.9593 5.49092 34.3291 5.19621C33.6989 4.90149 33.0115 4.74915 32.3158 4.75H6.7165L6.65 4.19425C6.51391 3.03908 5.95869 1.97399 5.08961 1.20092C4.22053 0.427854 3.09799 0.000541173 1.93483 0L1.58333 0C1.16341 0 0.76068 0.166815 0.463748 0.463748C0.166815 0.76068 0 1.16341 0 1.58333C0 2.00326 0.166815 2.40599 0.463748 2.70292C0.76068 2.99985 1.16341 3.16667 1.58333 3.16667H1.93483C2.32264 3.16672 2.69695 3.3091 2.98676 3.5668C3.27656 3.8245 3.46171 4.1796 3.50708 4.56475L5.68575 23.0897C5.91193 25.0163 6.83759 26.7928 8.28702 28.082C9.73645 29.3712 11.6088 30.0834 13.5486 30.0833H30.0833C30.5033 30.0833 30.906 29.9165 31.2029 29.6196C31.4999 29.3227 31.6667 28.9199 31.6667 28.5C31.6667 28.0801 31.4999 27.6773 31.2029 27.3804C30.906 27.0835 30.5033 26.9167 30.0833 26.9167H13.5486C12.5686 26.9139 11.6134 26.6081 10.8141 26.0412C10.0147 25.4743 9.41025 24.674 9.08358 23.75H27.9569C29.813 23.7501 31.6102 23.098 33.0344 21.9077C34.4586 20.7174 35.4192 19.0644 35.7485 17.2377L36.9914 10.3439C37.1155 9.65993 37.0876 8.95702 36.9097 8.28501C36.7319 7.613 36.4084 6.98832 35.9622 6.45525ZM33.8833 9.78183L32.6388 16.6757C32.4411 17.7729 31.8637 18.7657 31.0078 19.4801C30.1518 20.1945 29.0718 20.585 27.9569 20.5833H8.58008L7.09017 7.91667H32.3158C32.5484 7.91528 32.7785 7.96515 32.9896 8.06274C33.2007 8.16033 33.3878 8.30323 33.5374 8.48129C33.6871 8.65936 33.7956 8.8682 33.8554 9.09298C33.9152 9.31776 33.9247 9.55295 33.8833 9.78183Z"
                                fill="#4868D8" />
                            <path
                                d="M11.0834 38C12.8323 38 14.2501 36.5822 14.2501 34.8333C14.2501 33.0844 12.8323 31.6666 11.0834 31.6666C9.33451 31.6666 7.91675 33.0844 7.91675 34.8333C7.91675 36.5822 9.33451 38 11.0834 38Z"
                                fill="#4868D8" />
                            <path
                                d="M26.9167 38C28.6656 38 30.0833 36.5822 30.0833 34.8333C30.0833 33.0844 28.6656 31.6666 26.9167 31.6666C25.1678 31.6666 23.75 33.0844 23.75 34.8333C23.75 36.5822 25.1678 38 26.9167 38Z"
                                fill="#4868D8" />
                        </g>
                        <defs>
                            <clipPath id="clip0_36_39">
                                <rect width="38" height="38" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>


                <button class="ms-10" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                        fill="none">
                        <g clip-path="url(#clip0_36_35)">
                            <path
                                d="M22 0C9.86883 0 0 9.86883 0 22C0 34.1312 9.86883 44 22 44C34.1312 44 44 34.1312 44 22C44 9.86883 34.1312 0 22 0ZM14.6667 38.8007V38.5C14.6667 34.4557 17.9557 31.1667 22 31.1667C26.0443 31.1667 29.3333 34.4557 29.3333 38.5V38.8007C27.0857 39.7852 24.607 40.3333 22 40.3333C19.393 40.3333 16.9143 39.7852 14.6667 38.8007ZM32.8625 36.7602C32.0265 31.5187 27.4743 27.5 22 27.5C16.5257 27.5 11.9753 31.5187 11.1375 36.7602C6.60917 33.418 3.66667 28.0463 3.66667 22C3.66667 11.891 11.891 3.66667 22 3.66667C32.109 3.66667 40.3333 11.891 40.3333 22C40.3333 28.0463 37.3908 33.418 32.8625 36.7602ZM22 9.16667C17.9557 9.16667 14.6667 12.4557 14.6667 16.5C14.6667 20.5443 17.9557 23.8333 22 23.8333C26.0443 23.8333 29.3333 20.5443 29.3333 16.5C29.3333 12.4557 26.0443 9.16667 22 9.16667ZM22 20.1667C19.9778 20.1667 18.3333 18.5222 18.3333 16.5C18.3333 14.4778 19.9778 12.8333 22 12.8333C24.0222 12.8333 25.6667 14.4778 25.6667 16.5C25.6667 18.5222 24.0222 20.1667 22 20.1667Z"
                                fill="#4868D8" />
                        </g>
                        <defs>
                            <clipPath id="clip0_36_35">
                                <rect width="44" height="44" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>

            </div>

        </div>
    </nav>

    <div
        class="w-full flex flex-col mt-14 items-center justify-center bg-gradient-to-br from-biru via-slate-200 to-ping">
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
