@extends('../page/client/layout/app')

@section('content')

{{-- hero img --}}
<section class='w-full bg-black sm:flex sm:flex-row-reverse'>
    {{-- img --}}
    <div class='w-full h-96 sm:h-64 md:h-4/5'>
        <img class='w-full h-96 sm:h-64 md:h-4/5 object-cover'src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt30bf5cbc144ae105%2F63e522f56918a756577e82ce%2FClydesCoffee-Mobile.gif&w=750&q=75" alt="img">
    </div>

    {{-- text --}}
    <div class='lg:ml-40 sm:ml-10 sm:text-left sm:justify-center sm:items-start sm:gap-2  py-3 px-5 text-center flex flex-col items-center w-full text-white gap-1'>
        <h5 class='md:text-base text-xs font-bold'>LIMITED TIME ONLY</h5>
        <H1 class='md:text-xl font-bold text-base'>CLYDE's Coffee Blend</H1>
        <p class="md:text-xl text-xs ">He may not be the smartest ghost,but he has good taste in coffe.Try our new CLYDE's coffee Blend to feel like you ate POWER PELLETS.</p>
        <a href="{!!url('/store')!!}"><button class='mt-2 text-black rounded-3xl px-3 py-2 flex justify-center font-bold items-center h-9 w-32 bg-white'>Find a Store</button></a>
    </div>
</section>

{{-- category --}}
<section class='lg:px-40 lg:text-base md:px-10 sm:grid-cols-6 text-xs gap-y-5 py-5 w-full grid grid-cols-3 grid-flow-row'>
    {{-- item 1 --}}
    <div>
        <a href="{!!url('/store/Hot_Food')!!}" class='home-flex-center hover:scale-105 hover:duration-100'>
            <svg class="home-category-svg" aria-hidden="true" focusable="false" data-prefix="fak" data-icon="burger" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540 512" data-fa-i2svg="" ><path fill="currentColor" d="M266.594 438.472c-77.105 0-146.84-16.886-181.993-44.064-9.68-7.473-15.46-19.453-15.46-32.043 0-20.115 4.844-33.487 14.393-39.74 4.975-3.251 13.44-6.018 25.546-.741 31.365 13.674 97.226 28.216 157.52 28.216 3.588 0 7.17-.04 10.696-.114 6.264.08 11.45 4.843 11.575 11.095.125 6.264-4.838 11.45-11.096 11.58-3.691.075-7.422.115-11.176.115-56.528 0-126.582-12.665-166.584-30.104-2.96-1.295-4.13-1.055-4.13-1.05-.793.53-4.062 5.705-4.062 20.737 0 5.448 2.613 10.982 6.652 14.096 30.903 23.898 96.895 39.335 168.124 39.335 75.2 0 144.593-17.343 172.671-43.145 3.326-3.052 5.237-7.525 5.237-12.277 0-15.654-1.683-21.028-2.652-22.825-.53.12-1.335.371-2.47.885-9.276 4.216-38.861 14.878-49.786 18.135-6.013 1.774-12.322-1.626-14.108-7.621-1.797-6.008 1.615-12.323 7.628-14.114 10.103-3.018 38.415-13.2 46.898-17.057 11.438-5.186 19.328-2.721 23.937.25 12.203 7.873 13.224 25.992 13.224 42.347 0 11.079-4.587 21.65-12.579 28.98-32.46 29.842-106.256 49.124-188.005 49.124zm1.569-159.522c-113.462 0-199.016-37.155-199.016-86.41 0-69.5 87.42-123.94 199.016-123.94 111.601 0 199.02 54.44 199.02 123.94 0 49.26-85.559 86.41-199.02 86.41zm0-187.669c-97.232 0-176.34 45.427-176.34 101.26 0 30.143 72.416 63.727 176.34 63.727 103.917 0 176.339-33.59 176.339-63.727 0-55.833-79.108-101.26-176.34-101.26zm63.613 300.44c-17.736 0-27.075-20.628-35.392-38.974-1.923-4.245-3.817-8.438-5.756-12.214-4.65-9.06-15.146-14.656-22.226-14.656h-.023c-89.416 0-168.335-22.585-196.596-56.208-4.028-4.798-3.412-11.946 1.386-15.98 4.792-4.021 11.951-3.405 15.979 1.381 23.817 28.336 97.431 48.125 179.015 48.125 14.467-.005 33.538 9.23 42.648 26.978 2.088 4.079 4.153 8.62 6.235 13.218 3.572 7.884 11.016 24.302 15.29 25.637 5.84-.981 12.806-25.523 16.15-37.315.73-2.567 1.454-5.117 2.196-7.627 5.624-19.208 23.48-32.563 38.683-37.28 29.927-9.316 51.332-21.724 60.254-34.936 3.508-5.186 10.554-6.55 15.745-3.047 5.191 3.509 6.56 10.56 3.046 15.751-11.963 17.713-36.967 32.894-72.307 43.892-9.185 2.847-20.589 11.53-23.664 21.998l-2.127 7.445c-7.017 24.718-14.262 50.281-34.685 53.504a25.277 25.277 0 01-3.851.308zM211.651 161.883c0 6.258-5.088 11.341-11.34 11.341-6.27 0-11.347-5.083-11.347-11.34 0-6.276 5.077-11.342 11.346-11.342 6.253 0 11.341 5.066 11.341 11.341m-40.669 6.869c0 6.258-5.065 11.34-11.34 11.34-6.253 0-11.342-5.082-11.342-11.34s5.078-11.341 11.341-11.341c6.276 0 11.341 5.083 11.341 11.34m28.94 33.111c0 6.258-5.094 11.341-11.346 11.341-6.27 0-11.336-5.077-11.336-11.335 0-6.27 5.072-11.341 11.336-11.341 6.258 0 11.346 5.077 11.346 11.335"></path></svg>
            <p>Hot Food</p>
        </a>
    </div>
    {{-- item 2 --}}
    <div>
        <a href="#" class='home-flex-center hover:scale-105 hover:duration-100'>
            <svg class="home-category-svg" aria-hidden="true" focusable="false" data-prefix="fak" data-icon="sandwich" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540 512" data-fa-i2svg="" ><path fill="currentColor" d="M418.066 113.382h-20.104c-27.964 0-53.442 8.294-70.368 21.957-16.908-13.663-42.386-21.427-70.356-21.427-25.124 0-48.428 6.218-65.32 17.708-16.891-11.49-40.2-18.233-65.33-18.233h-10.052c-49.032 0-92.103 29.471-92.103 63.523v17.587c0 13.657 15.095 32.99 31.793 32.99h422.128c16.709 0 36.687-19.333 36.687-32.99v-17.593c.005-34.052-47.949-63.522-96.975-63.522zm74.161 81.104c0 3.137-8.67 15.876-13.868 15.876H56.232c-5.186 0-8.974-12.733-8.974-15.876v-17.582c0-20.166 29.014-40.703 69.284-40.703h10.052c23.492 0 45.484 5.767 58.821 17.114l1.894 1.106c4.764 4.502 9.641 10.84 9.641 18.969 0 5.55 4.496 9.926 10.052 9.926 5.55 0 10.052-4.564 10.052-10.115 0-9.578-3.36-18.74-9.704-26.96 13.224-7.599 31.04-12.043 49.9-12.043 26.48 0 50.589 8.426 62.917 21.998l.171.188c4.815 5.345 7.262 10.976 7.262 16.743 0 5.551 4.507 10.052 10.063 10.052 5.551 0 10.04-4.501 10.04-10.052 0-7.77-2.281-14.364-6.594-21.392 13.298-10.315 34.183-15.529 56.865-15.529h20.098c40.264 0 74.161 20.537 74.161 40.704v17.576zm-3.805 90.038H423.08c-5.55 0-10.046 5.853-10.046 11.41s4.496 11.409 10.046 11.409h69.147v17.798c0 5.551-8.323 10.725-13.868 10.725H56.232c-5.54 0-8.974-5.174-8.974-10.725v-17.798h230.1c5.551 0 10.04-5.853 10.04-11.41s-4.489-11.41-10.04-11.41H46.18c-11.079 0-21.747 9.43-21.747 20.515v20.103c0 16.624 15.17 33.544 31.793 33.544h422.128c16.629 0 36.687-16.92 36.687-33.544v-20.103c.005-11.084-15.551-20.514-26.619-20.514zm10.035-39.933h-86.54c-12.312 0-23.185 7.632-27.709 19.333-9.122 23.652-20.206 36.054-26.453 36.054-5.807 0-15.157-10.463-23.406-19.647-14.285-15.9-32.044-35.74-56.99-35.74H36.129c-5.552 0-10.053 3.006-10.053 8.557s4.501 8.557 10.052 8.557h241.225c15.979 0 29.23 16.31 42.038 30.583 12.123 13.492 23.59 27.04 38.359 27.04 22.933 0 38.159-31.804 45.204-50.042 1.5-3.89 5.014-7.581 8.956-7.581h86.547c5.556 0 10.057-3.007 10.057-8.557s-4.5-8.557-10.057-8.557z"></path></svg>
            <p>Fresh & Chilled</p>
        </a>
    </div>
    {{-- item 3 --}}
    <div>
        <a href="#" class='home-flex-center hover:scale-105 hover:duration-100'>
            <svg class="home-category-svg" aria-hidden="true" focusable="false" data-prefix="fak" data-icon="snack" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540 512" data-fa-i2svg="" ><path fill="currentColor" d="M397.112 419.19l-10.183-20.572h-.011c4.478-11.41 7.399-22.573 9.727-45.272 2.572-25.118 3.987-59.478 3.987-95.623 0-92.976-6.828-127.113-13.897-139.43l10.577-24.347c2.105-1.82 2.105-4.148 2.105-6.897 0-4.433-3.063-8.284-7.33-9.214-2.294-.479-4.627-.08-6.55 1.062-21.592 4.3-209.985 4.29-231.59-.012a9.101 9.101 0 00-6.56-1.078c-4.26.93-7.313 4.746-7.313 9.173 0 2.784.57 4.89 1.985 6.504l10.622 24.364c-4.563 7.422-7.49 21.365-9.84 44.246-2.579 25.124-3.993 58.873-3.993 95.03 0 92.496 6.771 126.468 13.794 138.939l-10.258 21.923c-2.31 1.865-2.31 4.182-2.31 7.04 0 4.398 3 8.192 7.217 9.15a9.086 9.086 0 006.737-1.084c21.66-4.393 209.792-4.393 231.452 0a9.106 9.106 0 006.743 1.084c4.2-.97 7.2-4.763 7.2-9.15-.006-2.853-.006-3.965-2.31-5.836zm-29.818-21.245l7.062 15.118c-18.272-1.426-49.905-1.957-104.625-1.957-54.702 0-86.324.525-104.613 1.962l7.074-15.117a9.543 9.543 0 00-.548-9.03 9.331 9.331 0 00-3.993-3.538c-13.418-24.41-13.418-232.114 0-256.53a9.176 9.176 0 003.93-3.423 9.508 9.508 0 00.702-8.91l-7.73-17.725c5.933.336 13.212.582 22.077.872 21.952.714 51.469 1.107 83.096 1.107 55.284 0 86.985-.525 105.19-1.98l-7.742 17.72c-1.272 2.892-.993 6.252.702 8.91.992 1.523 2.35 3.617 3.942 4.336 13.406 24.416 13.406 228.925 0 257.449h-.012c-1.614 0-3.018 1.055-3.999 2.624-1.671 2.721-1.882 5.209-.513 8.112zm-142.06-84.92c1.29.205 2.567.319 3.874.319 9.504 0 19.579-5.75 30.018-17.137 2.887-3.143 5.54-6.32 7.981-9.105 15.13-17.011 20.423-19.693 30.732-19.693h.114c5.893 0 10.976 3.144 15.277 3.144 8.894 0 14.615-3.423 18.187-7.085 7.01-7.251 8.357-18.461 6.08-25.37-3.89-11.871-15.887-26.532-37.884-32.225-21.393-5.546-39.05 14.98-46.266 25.106-11.883-1.495-23.743-.211-33.087 6.891-19.682 14.97-23.863 35.484-12.214 61.383 3.309 7.354 9.75 12.516 17.188 13.772zm69.992-88.932c19.265 4.998 24.313 17.617 25.1 20.03.246 1.004.058 4.467-1.836 6.275-2.294 2.202-7.799 2.03-14.764-.337-4.045-2.464-16.133-9.401-30.732-14.376 6.133-6.868 14.536-13.577 22.232-11.592zm-64.264 28.923c3.634-2.766 8.471-3.913 13.868-3.913 8.671 0 18.826 2.91 27.993 6.51-6.418 4.808-12.419 11.551-19.025 18.979a697.356 697.356 0 01-7.787 8.682c-10.474 11.421-16.281 11.461-17.867 11.227-2.208-.376-3.326-2.356-3.857-3.565-5.722-12.722-8.888-26.11 6.675-37.92zm36.23 117.375c-82.712 0-82.712 1.717-82.712 12.887 0 5.477 4.119 9.932 9.207 9.932a8.474 8.474 0 004.022-1.004c15.003-2.584 123.975-2.584 138.973 0a8.524 8.524 0 004.022 1.004c5.094 0 9.202-4.444 9.202-9.932.005-11.175.005-12.887-82.713-12.887zm73.518-245.303a8.49 8.49 0 00-4.022 1.004c-15.01 2.584-123.964 2.584-138.962 0a8.586 8.586 0 00-4.033-1.004c-5.083 0-9.208 4.45-9.208 9.932 0 11.01 9.333 11.335 31.873 12.14 13.434.49 31.496.747 50.852.747 82.707 0 82.707-1.717 82.707-12.887-.006-5.477-4.113-9.932-9.207-9.932z"></path></svg>
            <p>Snack Food</p>
        </a>
    </div>
    {{-- item 4 --}}
    <div>
        <a href="#" class='home-flex-center hover:scale-105 hover:duration-100'>
            <svg class="home-category-svg" aria-hidden="true" focusable="false" data-prefix="fak" data-icon="coffee" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540 512" data-fa-i2svg="" ><path fill="currentColor" d="M401.802 182.603c-5.922-5.882-13.903-5.847-21.747-5.75l-1.928.01v-19.298c0-11.033-8.968-21.37-19.995-21.37h-176.79c-11.016 0-19.995 10.337-19.995 21.37v19.299l-2.168-.011c-7.838-.103-15.59-.143-21.512 5.738-3.52 3.52-4.844 8.318-4.844 14.268v29.47c0 5.637 3.611 12.551 9.248 12.551h10.325l20.207 225.257c.964 15.688 14.05 25.751 29.755 25.751h134.758c15.71 0 28.78-10.063 29.75-25.483l20.229-225.525h10.32c5.63 0 9.241-6.92 9.241-12.55v-29.471c0-5.95-1.335-10.742-4.854-14.256zm-55.24 278.767h-.016c-.303 5.705-4.444 11.41-9.442 11.41H202.358c-4.98 0-9.144-3.309-9.48-8.546l-20.053-225.348h193.83L346.563 461.37zm42.98-262.417v17.114H152.265l-.171-16.755 20.668-.36h96.98c5.62 0 10.184-5.79 10.184-11.409 0-5.63-4.564-11.41-10.183-11.41h-88.167l-1.46-18.574 175.198.011v18.564h-26.658c-5.62 0-10.166 5.779-10.166 11.41 0 5.624 4.546 11.409 10.166 11.409h60.887zm-153.577-76.815c1.272 4.655 5.38 7.702 9.846 7.702.919 0 1.854-.12 2.773-.388 5.436-1.586 8.608-7.405 7.08-13.041l-3.806-14.05c-1.317-4.787.217-9.939 3.88-13.156l.793-.69c9.515-8.33 13.651-21.775 10.553-34.246l-3.856-15.54c-1.41-5.653-6.994-9.064-12.448-7.615-5.465 1.454-8.768 7.222-7.37 12.864l3.856 15.54c1.175 4.689-.4 9.743-3.965 12.864l-.787.701c-9.744 8.54-13.823 22.272-10.36 34.993l3.811 14.062zm16.652 267.244a9.287 9.287 0 100 18.575 9.287 9.287 0 100-18.575zm-37.143-12.379a9.287 9.287 0 100 18.575 9.287 9.287 0 100-18.575zm6.19 37.15a9.287 9.287 0 100 18.574 9.287 9.287 0 100-18.575zM277.66 105.32c1.283 4.643 5.402 7.678 9.898 7.678.918 0 1.876-.13 2.806-.388 5.466-1.58 8.649-7.393 7.108-12.983l-3.845-13.983c-1.306-4.752.229-9.898 3.92-13.11l.804-.684c9.59-8.295 13.731-21.684 10.622-34.103l-3.879-15.471c-1.426-5.648-7.04-9.048-12.528-7.593-5.516 1.455-8.825 7.182-7.416 12.813l3.874 15.488c1.186 4.661-.382 9.698-3.976 12.802l-.81.69c-9.807 8.511-13.909 22.197-10.434 34.867l3.856 13.977z"></path></svg>
            <p>Coffee</p>
        </a>
    </div>
    {{-- item 5 --}}
    <div>
        <a href="#" class='home-flex-center hover:scale-105 hover:duration-100'>
            <svg class="home-category-svg" aria-hidden="true" focusable="false" data-prefix="fak" data-icon="ice-cream" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540 512" data-fa-i2svg="" ><path fill="currentColor" d="M368.988 189.312c7.793-15.654 11.946-32.922 11.946-50.641 0-62.735-51.04-113.776-113.793-113.776-62.74 0-113.78 51.04-113.78 113.776 0 17.553 4.814 35.774 13.61 52.557-9.52 5.648-15.99 15.922-15.99 27.771 0 14.24 9.237 26.362 22.032 30.692l66.255 219.735c4.81 13.389 17.046 20.474 30.446 20.474h.029c13.412 0 25.654-7.085 30.663-21.028l66.06-220.14c12.796-4.324 22.026-15.979 22.026-30.218 0-13.28-8.043-24.205-19.504-29.202zm-172.933 60.983h38.706l-29.778 28.615-8.928-28.615zm15.813 50.824l53.425-50.824h42.837l-85.782 84.362-10.48-33.538zm68.046 162.488c-2.014 5.568-10.171 9.047-10.171 9.047v-.268c-6.897 0-8.152-3.097-9.966-8.095l-1.13-8.351 34.086-34.822-12.819 42.489zm27.15-85.15l-54.207 54.196-8.044-25.814 75.702-75.69-13.452 47.309zm25.556-90.066l-95.07 95.116-8.31-26.727 109.433-106.485h4.746l-10.799 38.096zm23.492-60.915h-172.75c-5.945 0-12.083-5.356-12.408-12.15-.474-10.07 5.294-16.373 14-16.373h31.25c5.961 0 10.799-2.596 10.799-8.557 0-5.968-4.838-8.558-10.8-8.558h-27.108c-9.128-17.114-14.142-29.59-14.142-45.552 0-50.823 41.36-90.99 92.188-90.99 50.841 0 92.2 39.562 92.2 90.391 0 17.023-4.683 29.037-13.48 46.151h-76.118c-5.962 0-10.8 2.59-10.8 8.558 0 5.961 4.838 8.557 10.8 8.557h86.375c5.944 0 10.793 8.306 10.793 14.256s-4.854 14.267-10.799 14.267z"></path></svg>
            <p>Ice Cream</p>
        </a>
    </div>
    {{-- item 6 --}}
    <div>
        <a href="#" class='home-flex-center hover:scale-105 hover:duration-100'>
            <svg class="home-category-svg" aria-hidden="true" focusable="false" data-prefix="fak" data-icon="juice" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540 512" data-fa-i2svg="" ><path fill="currentColor" d="M341.948 112.286c-1.347-1.414-2.59-2.938-4.182-4.809l-11.004-13.052c-1.906-2.242-3.052-4.946-3.44-7.839l-.04-5.368c4.86-1.044 9.207-5.014 9.207-9.994v-27.12c0-5.762-6.138-10.589-12.134-10.589H219.136c-5.996 0-12.145 4.827-12.145 10.588v27.12c0 4.98 4.33 8.951 9.184 9.995l-.393 5.346c-.377 2.903-1.432 5.619-3.338 7.855l-11.027 13.064c-1.592 1.865-2.584 3.4-3.92 4.809-9.828 10.269-13.325 17.148-13.325 44.383v280.028c0 22.956 18.392 41.776 42.112 41.776h86.923c23.72 0 42.107-18.82 42.107-41.776V156.675c0-27.246-3.549-34.126-13.366-44.389zm-9.453 324.423c0 11.432-7.525 18.957-19.288 18.957h-86.923c-11.763 0-19.293-7.513-19.293-18.957V156.675c0-21.78 1.18-24.091 7.068-30.235 1.591-1.666 2.83-3.497 4.712-5.716l10.873-13.064c4.484-5.277 7.21-12.904 8.118-19.704l.861-8.803h62.268l.986 8.797c.89 6.8 3.731 13.794 8.232 19.088l11.108 13.372c1.905 2.225 2.618 4.21 4.21 5.864 5.887 6.156 7.062 8.609 7.062 30.407v280.028zm-100.74-53.704a8.557 8.557 0 100 17.114 8.557 8.557 0 100-17.114zm5.705 34.228a8.557 8.557 0 100 17.114 8.557 8.557 0 100-17.114zm84.487-214.618c-2.767-2.02-6.777-2.653-10.138-1.774l-91.452 24.468c-4.792 1.283-7.662 5.459-7.662 10.24v34.148c0 3.326 1.17 6.458 3.925 8.466 1.957 1.426 4.09 2.15 6.486 2.15 1.005 0 1.877-.12 2.859-.376l92.314-24.479c4.792-1.272 8.505-5.46 8.505-10.229v-34.16c.006-3.325-2.07-6.446-4.837-8.454zm-17.976 34.548l-68.457 18.563v-12.122l68.457-18.564v12.123zm-37.988 162.956a8.557 8.557 0 100 17.114 8.557 8.557 0 100-17.114z"></path></svg>
            <p>Cold Pressed Juices</p>
        </a>
    </div>
</section>

{{-- Get the App --}}
<section class="relative">
    {{-- app image --}}
    <div class="sm:hidden w-full h-80">
        <img class='sm:h-40 w-full h-80 object-cover' src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt7d030da8836b0909%2F62d188fdd612b23647236a43%2FSummerHiring7-16-mbg.png&w=828&q=75" alt="pizza image">
    </div>
    {{-- app image for sm --}}
    <div class="xs:hidden md:h-60 sm:block sm:h-40 w-full h-80">
        <img class=' md:h-60 sm:h-40 w-full h-80 object-cover' src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt2464b802e72eafe1%2F62d0935c30ed0e3641c636ec%2FP5-FreePizza-tbg.jpg&w=1080&q=75" alt="pizza image">
    </div>
    {{-- app text --}}
    <div class='md:items-center lg:right-40 md:flex-row md:text-center md:justify-center md:top-10 md:right-30 sm:bottom-5 sm:right-10 sm:text-left sm:items-start sm:justify-center absolute bottom-10 text-center text-white px-10 flex flex-col gap-3 items-center'>
        {{-- text --}}
        <div class='sm:w-96 lg:w-1/2'>
            <h1 class='lg:text-3xl  sm:text-xl font-bold mb-1'>FREE Pizza on Your First Delivery Order</h1>
            <p class='sm:text-sm text-xs'>Enjoy 24/7 delivery and get a FREE large pizza on your first 7NOW® delivery order with code: PIZZA.</p>
        </div>
        {{-- app button --}}
        <button class='w-32 bg-white rounded-3xl text-black px-4 py-2'>Get the App</button>
    </div>
</section>

<!-- commerce product cards -->
<section class='sm:flex-row sm:justify-center flex flex-col items-center'>
    {{-- product 1 --}}
    <div class="w-full max-w-sm bg-white  ">
        <a href="{!!url('/store')!!}">
            <img class="p-8 rounded-t-lg" src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt922e441603bc59e8%2F63e510807c0ff856588555e1%2FP2-23-Homepage-Celsius.png&w=1200&q=75" alt="product image" />
        </a>
        <div class="px-5 pb-5 text-center">
            {{-- price --}}
            <div class="text-lg font-bold text-gray-900 dark:text-white">2/$4.50 CELSIUS**</div>
            {{-- description --}}
            <h5 class="mb-1 text-ms tracking-tight text-gray-900 dark:text-white">Try our new exclusive flavor: Green Apple Cherry.</h5>
            {{-- link --}}
            <a href="{!!url('/store')!!}" class='hover:underline font-bold'>Find a Store</a>
        </div>
    </div>
    {{-- product 2 --}}
    <div class="w-full max-w-sm bg-white  ">
        <a href="{!!url('/store')!!}">
            <img class="p-8 rounded-t-lg" src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fbltcb297174947c348f%2F63e510809c6cb020b6883563%2FP2-23-Homepage-Starry.png&w=1200&q=75" alt="product image" />
        </a>
        <div class="px-5 pb-5 text-center">
            {{-- price --}}
            <div class="text-lg font-bold text-gray-900 dark:text-white">2/$4 </div>
            {{-- description --}}
            <h5 class="mb-1 text-ms tracking-tight text-gray-900 dark:text-white">Starry and Starry Zero Sugar 20 oz. Bottles**</h5>
            {{-- link --}}
            <a href="{!!url('/store')!!}" class='hover:underline font-bold'>Find a Store</a>
        </div>
    </div>
    {{-- product 3 --}}
    <div class="w-full max-w-sm bg-white  ">
        <a href="{!!url('/store')!!}">
            <img class="p-8 rounded-t-lg" src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt3b3350c78cdc6040%2F63e51080c7306d1b0f972773%2FP2-23-Homepage-Chex.png&w=1200&q=75" alt="product image" />
        </a>
        <div class="px-5 pb-5 text-center">
            {{-- price --}}
            <div class="text-lg font-bold text-gray-900 dark:text-white">1/$1.5</div>
            {{-- description --}}
            <h5 class="mb-1 text-ms tracking-tight text-gray-900 dark:text-white">Buy 2, Save $1 Chex Mix Bags or Bars**</h5>
            {{-- link --}}
            <a href="{!!url('/store')!!}" class='hover:underline font-bold'>Find a Store</a>
        </div>
    </div>
</section>

{{-- Quote --}}
<section class='mt-10 flex flex-col items-center py-10 bg-black text-white'>
    <h1 class='font-bold text-2xl'>Inside 7-Eleven</h1>
    <p class='text-base'>There's more to 7-Eleven than taquitos and Slurpee® drinks.</p>
</section>

{{-- carousel --}}
<section>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
        <div class="relative h-96 overflow-hidden rounded-lg md:h-96">
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt4e3dfdd40b1dbff7%2F63a0a2d6488c8256ed8f9660%2FHolidayHangover-Hero.jpg&w=1920&q=75" class="h-96 object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt1045ad105db7159f%2F63640f827ec6792d067be193%2FGingerbrewedCookie-Cup-ContentHub.png&w=750&q=75" class="h-96 object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt4e3dfdd40b1dbff7%2F63a0a2d6488c8256ed8f9660%2FHolidayHangover-Hero.jpg&w=1920&q=75" class="h-96 object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt4e3dfdd40b1dbff7%2F63a0a2d6488c8256ed8f9660%2FHolidayHangover-Hero.jpg&w=1920&q=75" class="h-96 object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt4e3dfdd40b1dbff7%2F63a0a2d6488c8256ed8f9660%2FHolidayHangover-Hero.jpg&w=1920&q=75" class="h-96 object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</section>

{{-- card link social media --}}
<section class='lg:px-20 py-10 px-5'>
    <h1 class='mb-4 text-3xl font-bold'>Get Connected</h1>
    {{-- card wrap--}}
    <div class="md:grid-cols-5 grid grid-cols-1 gap-7">
        {{-- card 1 --}}
        <div class='lg:h-80 md:h-60 sm:h-xbig h-big overflow-clip relative'>
            <img class='md:h-full sm:h-xbig h-big w-full object-cover hover:scale-105 duration-100'src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt9499595aed6ece53%2F61de0464997c0e224de0a79f%2FInstagram.jpg&w=640&q=75" alt="image">
            <div class='absolute left-2/4 -translate-x-1/2 bottom-5 tra z-100 w-52 h-10 bg-black flex justify-center items-center'>
                <a href="https://www.instagram.com/7eleven/">
                    <h1 class="text-white">INSTGRAM</h1>
                </a>
            </div>
        </div>
        {{-- card 2 --}}
        <div class='lg:h-80 md:h-60 sm:h-xbig h-big overflow-clip relative'>
            <img class='md:h-full sm:h-xbig h-big w-full object-cover hover:scale-105 duration-100'src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt22abcc7e1a5d2f84%2F61ddce40bf9cb8387cc1e11b%2FHome-Social-Twitter.gif&w=640&q=75" alt="image">
            <div class='absolute left-2/4 -translate-x-1/2 bottom-5 tra z-100 w-52 h-10 bg-black flex justify-center items-center'>
                <a href="https://twitter.com/7Eleven">
                    <h1 class="text-white">TWITTER</h1>
                </a>
            </div>
        </div>
        {{-- card 3 --}}
        <div class='lg:h-80 md:h-60 sm:h-xbig h-big overflow-clip relative'>
            <img class='md:h-full sm:h-xbig h-big w-full object-cover hover:scale-105 duration-100'src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fbltaaea7365e80de59b%2F61de04649efff26ae7598859%2FFacebook.jpg&w=640&q=75" alt="image">
            <div class='absolute left-2/4 -translate-x-1/2 bottom-5 tra z-100 w-52 h-10 bg-black flex justify-center items-center'>
                <a href="https://web.facebook.com/7Eleven?_rdc=1&_rdr">
                    <h1 class="text-white">FACEBOOK</h1>
                </a>
            </div>
        </div>
         {{-- card 4 --}}
         <div class='lg:h-80 md:h-60 sm:h-xbig h-big overflow-clip relative'>
            <img class='md:h-full sm:h-xbig h-big w-full object-cover hover:scale-105 duration-100'src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt466c52d23719c1ea%2F60ba96d2f8aee612d3995b44%2FHome-Social-Youtube.jpg&w=640&q=75" alt="image">
            <div class='absolute left-2/4 -translate-x-1/2 bottom-5 tra z-100 w-52 h-10 bg-black flex justify-center items-center'>
                <a href="https://www.youtube.com/watch?v=903UyiCE_Kk">
                    <h1 class="text-white">YOUTUBE</h1>
                </a>
            </div>
        </div>
        {{-- card 5 --}}
        <div class='lg:h-80 md:h-60 sm:h-xbig h-big overflow-clip relative'>
            <img class='md:h-full sm:h-xbig h-big w-full object-cover hover:scale-105 duration-100'src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt100b34ce17b913bb%2F61ddc86b8aabbf6426b758e0%2FTikTok.jpg&w=640&q=75" alt="image">
            <div class='absolute left-2/4 -translate-x-1/2 bottom-5 tra z-100 w-52 h-10 bg-black flex justify-center items-center'>
                <a href="https://www.tiktok.com/@7eleven">
                    <h1 class="text-white">TIKTOK</h1>
                </a>
            </div>
        </div>
        

    </div>
</section>

@endsection