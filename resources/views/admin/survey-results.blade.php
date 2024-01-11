@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-8 col-xxl-7 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-2">
                        <h5 style="font-weight: 700">
                            Jumlah Alumni Perjurusan
                        </h5>
                        <p>
                            Klik Untuk Melihat Presentase persen
                        </p>
                    </div>
                    <div id="chart10" class="mt-4"></div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card radius-10 border-start border-0 border-4 border-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Kuliah S1</p>
                            <h4 class="my-1 text-primary mt-3">12</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #ECF2FF;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44" fill="none">
                                <path d="M22 31.6249C21.7606 31.6249 21.5254 31.5624 21.3177 31.4436L9.28125 24.5643C9.17666 24.5039 9.05801 24.4721 8.93725 24.4722C8.81648 24.4722 8.69785 24.5041 8.59331 24.5645C8.48877 24.625 8.402 24.7119 8.34173 24.8166C8.28146 24.9212 8.24982 25.0399 8.25 25.1607V31.6249C8.2498 31.8703 8.31528 32.1113 8.43965 32.3229C8.56401 32.5344 8.74274 32.7088 8.95727 32.828L21.3323 39.703C21.5365 39.8165 21.7663 39.876 22 39.876C22.2337 39.876 22.4635 39.8165 22.6677 39.703L35.0427 32.828C35.2573 32.7088 35.436 32.5344 35.5604 32.3229C35.6847 32.1113 35.7502 31.8703 35.75 31.6249V25.1607C35.7502 25.0399 35.7185 24.9212 35.6583 24.8166C35.598 24.7119 35.5112 24.625 35.4067 24.5645C35.3021 24.5041 35.1835 24.4722 35.0628 24.4722C34.942 24.4721 34.8233 24.5039 34.7188 24.5643L22.6823 31.4436C22.4746 31.5624 22.2394 31.6249 22 31.6249Z" fill="#5D87FF"/>
                                <path d="M42.6178 16.371C42.6178 16.371 42.6178 16.3641 42.6178 16.3616C42.5955 16.1436 42.5215 15.9341 42.4019 15.7506C42.2824 15.567 42.1206 15.4147 41.9303 15.3063L22.6803 4.30625C22.4725 4.18748 22.2373 4.125 21.9979 4.125C21.7586 4.125 21.5234 4.18748 21.3156 4.30625L2.06557 15.3063C1.85519 15.4265 1.68033 15.6003 1.55871 15.8099C1.4371 16.0195 1.37305 16.2576 1.37305 16.4999C1.37305 16.7423 1.4371 16.9803 1.55871 17.1899C1.68033 17.3996 1.85519 17.5733 2.06557 17.6936L21.3156 28.6936C21.5234 28.8124 21.7586 28.8748 21.9979 28.8748C22.2373 28.8748 22.4725 28.8124 22.6803 28.6936L39.6168 19.0162C39.643 19.0011 39.6727 18.9931 39.7029 18.9931C39.7332 18.9932 39.7628 19.0012 39.789 19.0163C39.8151 19.0315 39.8368 19.0533 39.8519 19.0795C39.8669 19.1058 39.8748 19.1355 39.8746 19.1657V31.5863C39.8746 32.3262 40.4435 32.9613 41.1835 32.9982C41.3694 33.0072 41.5552 32.9783 41.7296 32.9133C41.904 32.8483 42.0634 32.7486 42.1982 32.6202C42.3329 32.4918 42.4402 32.3374 42.5135 32.1663C42.5868 31.9952 42.6246 31.8111 42.6246 31.6249V16.4999C42.6245 16.4569 42.6222 16.4138 42.6178 16.371Z" fill="#5D87FF"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10 border-start border-0 border-4 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Bekerja di Perusahaan</p>
                            <h4 class="my-1 text-warning mt-3">345</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #FEF5E5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44" fill="none">
                                <path d="M37.125 15.125H27.5V5.5C27.5 4.40598 27.0654 3.35677 26.2918 2.58318C25.5182 1.8096 24.469 1.375 23.375 1.375H6.875C5.78098 1.375 4.73177 1.8096 3.95818 2.58318C3.1846 3.35677 2.75 4.40598 2.75 5.5V41.25C2.75 41.6147 2.89487 41.9644 3.15273 42.2223C3.41059 42.4801 3.76033 42.625 4.125 42.625H13.0625C13.2448 42.625 13.4197 42.5526 13.5486 42.4236C13.6776 42.2947 13.75 42.1198 13.75 41.9375V35.7887C13.75 35.0488 14.3189 34.4137 15.0588 34.3767C15.2447 34.3678 15.4305 34.3966 15.605 34.4616C15.7794 34.5266 15.9388 34.6263 16.0735 34.7547C16.2083 34.8831 16.3156 35.0375 16.3889 35.2086C16.4622 35.3797 16.5 35.5639 16.5 35.75V41.9375C16.5 42.1198 16.5724 42.2947 16.7014 42.4236C16.8303 42.5526 17.0052 42.625 17.1875 42.625H39.875C40.2397 42.625 40.5894 42.4801 40.8473 42.2223C41.1051 41.9644 41.25 41.6147 41.25 41.25V19.25C41.25 18.156 40.8154 17.1068 40.0418 16.3332C39.2682 15.5596 38.219 15.125 37.125 15.125ZM8.42875 37.1138C8.14398 37.1511 7.85469 37.0982 7.60149 36.9627C7.34829 36.8271 7.14389 36.6157 7.01698 36.3581C6.89007 36.1004 6.84701 35.8095 6.89385 35.5262C6.9407 35.2428 7.07509 34.9812 7.27817 34.7782C7.48125 34.5751 7.74282 34.4407 8.02617 34.3939C8.30952 34.347 8.60043 34.3901 8.85806 34.517C9.11569 34.6439 9.32712 34.8483 9.46267 35.1015C9.59821 35.3547 9.65107 35.644 9.61383 35.9287C9.57452 36.2293 9.43703 36.5084 9.22271 36.7227C9.0084 36.937 8.72928 37.0745 8.42875 37.1138ZM8.42875 30.2388C8.14398 30.2761 7.85469 30.2232 7.60149 30.0877C7.34829 29.9521 7.14389 29.7407 7.01698 29.4831C6.89007 29.2254 6.84701 28.9345 6.89385 28.6512C6.9407 28.3678 7.07509 28.1062 7.27817 27.9032C7.48125 27.7001 7.74282 27.5657 8.02617 27.5189C8.30952 27.472 8.60043 27.5151 8.85806 27.642C9.11569 27.7689 9.32712 27.9733 9.46267 28.2265C9.59821 28.4797 9.65107 28.769 9.61383 29.0537C9.57452 29.3543 9.43703 29.6334 9.22271 29.8477C9.0084 30.062 8.72928 30.1995 8.42875 30.2388ZM8.42875 23.3638C8.14398 23.4011 7.85469 23.3482 7.60149 23.2127C7.34829 23.0771 7.14389 22.8657 7.01698 22.6081C6.89007 22.3504 6.84701 22.0595 6.89385 21.7762C6.9407 21.4928 7.07509 21.2312 7.27817 21.0282C7.48125 20.8251 7.74282 20.6907 8.02617 20.6439C8.30952 20.597 8.60043 20.6401 8.85806 20.767C9.11569 20.8939 9.32712 21.0983 9.46267 21.3515C9.59821 21.6047 9.65107 21.894 9.61383 22.1787C9.57452 22.4793 9.43703 22.7584 9.22271 22.9727C9.0084 23.187 8.72928 23.3245 8.42875 23.3638ZM8.42875 16.4888C8.14398 16.5261 7.85469 16.4732 7.60149 16.3377C7.34829 16.2021 7.14389 15.9907 7.01698 15.7331C6.89007 15.4754 6.84701 15.1845 6.89385 14.9012C6.9407 14.6178 7.07509 14.3562 7.27817 14.1532C7.48125 13.9501 7.74282 13.8157 8.02617 13.7689C8.30952 13.722 8.60043 13.7651 8.85806 13.892C9.11569 14.0189 9.32712 14.2233 9.46267 14.4765C9.59821 14.7297 9.65107 15.019 9.61383 15.3038C9.57452 15.6043 9.43703 15.8834 9.22271 16.0977C9.0084 16.312 8.72928 16.4495 8.42875 16.4888ZM8.42875 9.61383C8.14398 9.65107 7.85469 9.59821 7.60149 9.46267C7.34829 9.32712 7.14389 9.11569 7.01698 8.85806C6.89007 8.60043 6.84701 8.30952 6.89385 8.02617C6.9407 7.74282 7.07509 7.48125 7.27817 7.27817C7.48125 7.07509 7.74282 6.9407 8.02617 6.89385C8.30952 6.84701 8.60043 6.89007 8.85806 7.01698C9.11569 7.14389 9.32712 7.34829 9.46267 7.60149C9.59821 7.85469 9.65107 8.14398 9.61383 8.42875C9.57452 8.72928 9.43703 9.0084 9.22271 9.22271C9.0084 9.43703 8.72928 9.57452 8.42875 9.61383ZM15.3038 30.2388C15.019 30.2761 14.7297 30.2232 14.4765 30.0877C14.2233 29.9521 14.0189 29.7407 13.892 29.4831C13.7651 29.2254 13.722 28.9345 13.7689 28.6512C13.8157 28.3678 13.9501 28.1062 14.1532 27.9032C14.3562 27.7001 14.6178 27.5657 14.9012 27.5189C15.1845 27.472 15.4754 27.5151 15.7331 27.642C15.9907 27.7689 16.2021 27.9733 16.3377 28.2265C16.4732 28.4797 16.5261 28.769 16.4888 29.0537C16.4495 29.3543 16.312 29.6334 16.0977 29.8477C15.8834 30.062 15.6043 30.1995 15.3038 30.2388ZM15.3038 23.3638C15.019 23.4011 14.7297 23.3482 14.4765 23.2127C14.2233 23.0771 14.0189 22.8657 13.892 22.6081C13.7651 22.3504 13.722 22.0595 13.7689 21.7762C13.8157 21.4928 13.9501 21.2312 14.1532 21.0282C14.3562 20.8251 14.6178 20.6907 14.9012 20.6439C15.1845 20.597 15.4754 20.6401 15.7331 20.767C15.9907 20.8939 16.2021 21.0983 16.3377 21.3515C16.4732 21.6047 16.5261 21.894 16.4888 22.1787C16.4495 22.4793 16.312 22.7584 16.0977 22.9727C15.8834 23.187 15.6043 23.3245 15.3038 23.3638ZM15.3038 16.4888C15.019 16.5261 14.7297 16.4732 14.4765 16.3377C14.2233 16.2021 14.0189 15.9907 13.892 15.7331C13.7651 15.4754 13.722 15.1845 13.7689 14.9012C13.8157 14.6178 13.9501 14.3562 14.1532 14.1532C14.3562 13.9501 14.6178 13.8157 14.9012 13.7689C15.1845 13.722 15.4754 13.7651 15.7331 13.892C15.9907 14.0189 16.2021 14.2233 16.3377 14.4765C16.4732 14.7297 16.5261 15.019 16.4888 15.3038C16.4495 15.6043 16.312 15.8834 16.0977 16.0977C15.8834 16.312 15.6043 16.4495 15.3038 16.4888ZM15.3038 9.61383C15.019 9.65107 14.7297 9.59821 14.4765 9.46267C14.2233 9.32712 14.0189 9.11569 13.892 8.85806C13.7651 8.60043 13.722 8.30952 13.7689 8.02617C13.8157 7.74282 13.9501 7.48125 14.1532 7.27817C14.3562 7.07509 14.6178 6.9407 14.9012 6.89385C15.1845 6.84701 15.4754 6.89007 15.7331 7.01698C15.9907 7.14389 16.2021 7.34829 16.3377 7.60149C16.4732 7.85469 16.5261 8.14398 16.4888 8.42875C16.4495 8.72928 16.312 9.0084 16.0977 9.22271C15.8834 9.43703 15.6043 9.57452 15.3038 9.61383ZM22.1787 37.1138C21.894 37.1511 21.6047 37.0982 21.3515 36.9627C21.0983 36.8271 20.8939 36.6157 20.767 36.3581C20.6401 36.1004 20.597 35.8095 20.6439 35.5262C20.6907 35.2428 20.8251 34.9812 21.0282 34.7782C21.2312 34.5751 21.4928 34.4407 21.7762 34.3939C22.0595 34.347 22.3504 34.3901 22.6081 34.517C22.8657 34.6439 23.0771 34.8483 23.2127 35.1015C23.3482 35.3547 23.4011 35.644 23.3638 35.9287C23.3245 36.2293 23.187 36.5084 22.9727 36.7227C22.7584 36.937 22.4793 37.0745 22.1787 37.1138ZM22.1787 30.2388C21.894 30.2761 21.6047 30.2232 21.3515 30.0877C21.0983 29.9521 20.8939 29.7407 20.767 29.4831C20.6401 29.2254 20.597 28.9345 20.6439 28.6512C20.6907 28.3678 20.8251 28.1062 21.0282 27.9032C21.2312 27.7001 21.4928 27.5657 21.7762 27.5189C22.0595 27.472 22.3504 27.5151 22.6081 27.642C22.8657 27.7689 23.0771 27.9733 23.2127 28.2265C23.3482 28.4797 23.4011 28.769 23.3638 29.0537C23.3245 29.3543 23.187 29.6334 22.9727 29.8477C22.7584 30.062 22.4793 30.1995 22.1787 30.2388ZM22.1787 23.3638C21.894 23.4011 21.6047 23.3482 21.3515 23.2127C21.0983 23.0771 20.8939 22.8657 20.767 22.6081C20.6401 22.3504 20.597 22.0595 20.6439 21.7762C20.6907 21.4928 20.8251 21.2312 21.0282 21.0282C21.2312 20.8251 21.4928 20.6907 21.7762 20.6439C22.0595 20.597 22.3504 20.6401 22.6081 20.767C22.8657 20.8939 23.0771 21.0983 23.2127 21.3515C23.3482 21.6047 23.4011 21.894 23.3638 22.1787C23.3245 22.4793 23.187 22.7584 22.9727 22.9727C22.7584 23.187 22.4793 23.3245 22.1787 23.3638ZM22.1787 16.4888C21.894 16.5261 21.6047 16.4732 21.3515 16.3377C21.0983 16.2021 20.8939 15.9907 20.767 15.7331C20.6401 15.4754 20.597 15.1845 20.6439 14.9012C20.6907 14.6178 20.8251 14.3562 21.0282 14.1532C21.2312 13.9501 21.4928 13.8157 21.7762 13.7689C22.0595 13.722 22.3504 13.7651 22.6081 13.892C22.8657 14.0189 23.0771 14.2233 23.2127 14.4765C23.3482 14.7297 23.4011 15.019 23.3638 15.3038C23.3245 15.6043 23.187 15.8834 22.9727 16.0977C22.7584 16.312 22.4793 16.4495 22.1787 16.4888ZM22.1787 9.61383C21.894 9.65107 21.6047 9.59821 21.3515 9.46267C21.0983 9.32712 20.8939 9.11569 20.767 8.85806C20.6401 8.60043 20.597 8.30952 20.6439 8.02617C20.6907 7.74282 20.8251 7.48125 21.0282 7.27817C21.2312 7.07509 21.4928 6.9407 21.7762 6.89385C22.0595 6.84701 22.3504 6.89007 22.6081 7.01698C22.8657 7.14389 23.0771 7.34829 23.2127 7.60149C23.3482 7.85469 23.4011 8.14398 23.3638 8.42875C23.3245 8.72928 23.187 9.0084 22.9727 9.22271C22.7584 9.43703 22.4793 9.57452 22.1787 9.61383ZM38.1562 39.875H27.5V17.875H37.125C37.4897 17.875 37.8394 18.0199 38.0973 18.2777C38.3551 18.5356 38.5 18.8853 38.5 19.25V39.5312C38.5 39.6224 38.4638 39.7099 38.3993 39.7743C38.3349 39.8388 38.2474 39.875 38.1562 39.875Z" fill="#FFAE1F"/>
                                <path d="M34.375 34.375C34.1031 34.375 33.8372 34.4556 33.6111 34.6067C33.385 34.7578 33.2087 34.9726 33.1047 35.2238C33.0006 35.4751 32.9734 35.7515 33.0264 36.0183C33.0795 36.285 33.2104 36.53 33.4027 36.7223C33.595 36.9146 33.84 37.0455 34.1068 37.0986C34.3735 37.1516 34.6499 37.1244 34.9012 37.0203C35.1524 36.9163 35.3672 36.74 35.5183 36.5139C35.6694 36.2878 35.75 36.0219 35.75 35.75C35.75 35.3853 35.6051 35.0356 35.3473 34.7777C35.0894 34.5199 34.7397 34.375 34.375 34.375Z" fill="#FFAE1F"/>
                                <path d="M34.375 27.5C34.1031 27.5 33.8372 27.5806 33.6111 27.7317C33.385 27.8828 33.2087 28.0976 33.1047 28.3488C33.0006 28.6001 32.9734 28.8765 33.0264 29.1433C33.0795 29.41 33.2104 29.655 33.4027 29.8473C33.595 30.0396 33.84 30.1705 34.1068 30.2236C34.3735 30.2766 34.6499 30.2494 34.9012 30.1453C35.1524 30.0413 35.3672 29.865 35.5183 29.6389C35.6694 29.4128 35.75 29.1469 35.75 28.875C35.75 28.5103 35.6051 28.1606 35.3473 27.9027C35.0894 27.6449 34.7397 27.5 34.375 27.5Z" fill="#FFAE1F"/>
                                <path d="M34.375 20.625C34.1031 20.625 33.8372 20.7056 33.6111 20.8567C33.385 21.0078 33.2087 21.2226 33.1047 21.4738C33.0006 21.7251 32.9734 22.0015 33.0264 22.2683C33.0795 22.535 33.2104 22.78 33.4027 22.9723C33.595 23.1646 33.84 23.2955 34.1068 23.3486C34.3735 23.4016 34.6499 23.3744 34.9012 23.2703C35.1524 23.1663 35.3672 22.99 35.5183 22.7639C35.6694 22.5378 35.75 22.2719 35.75 22C35.75 21.6353 35.6051 21.2856 35.3473 21.0277C35.0894 20.7699 34.7397 20.625 34.375 20.625Z" fill="#FFAE1F"/>
                                <path d="M28.875 34.375C28.6031 34.375 28.3372 34.4556 28.1111 34.6067C27.885 34.7578 27.7087 34.9726 27.6047 35.2238C27.5006 35.4751 27.4734 35.7515 27.5264 36.0183C27.5795 36.285 27.7104 36.53 27.9027 36.7223C28.095 36.9146 28.34 37.0455 28.6068 37.0986C28.8735 37.1516 29.1499 37.1244 29.4012 37.0203C29.6524 36.9163 29.8672 36.74 30.0183 36.5139C30.1694 36.2878 30.25 36.0219 30.25 35.75C30.25 35.3853 30.1051 35.0356 29.8473 34.7777C29.5894 34.5199 29.2397 34.375 28.875 34.375Z" fill="#FFAE1F"/>
                                <path d="M28.875 27.5C28.6031 27.5 28.3372 27.5806 28.1111 27.7317C27.885 27.8828 27.7087 28.0976 27.6047 28.3488C27.5006 28.6001 27.4734 28.8765 27.5264 29.1433C27.5795 29.41 27.7104 29.655 27.9027 29.8473C28.095 30.0396 28.34 30.1705 28.6068 30.2236C28.8735 30.2766 29.1499 30.2494 29.4012 30.1453C29.6524 30.0413 29.8672 29.865 30.0183 29.6389C30.1694 29.4128 30.25 29.1469 30.25 28.875C30.25 28.5103 30.1051 28.1606 29.8473 27.9027C29.5894 27.6449 29.2397 27.5 28.875 27.5Z" fill="#FFAE1F"/>
                                <path d="M28.875 20.625C28.6031 20.625 28.3372 20.7056 28.1111 20.8567C27.885 21.0078 27.7087 21.2226 27.6047 21.4738C27.5006 21.7251 27.4734 22.0015 27.5264 22.2683C27.5795 22.535 27.7104 22.78 27.9027 22.9723C28.095 23.1646 28.34 23.2955 28.6068 23.3486C28.8735 23.4016 29.1499 23.3744 29.4012 23.2703C29.6524 23.1663 29.8672 22.99 30.0183 22.7639C30.1694 22.5378 30.25 22.2719 30.25 22C30.25 21.6353 30.1051 21.2856 29.8473 21.0277C29.5894 20.7699 29.2397 20.625 28.875 20.625Z" fill="#FFAE1F"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10 border-start border-0 border-4" style="border-color: #1D9375 !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Membuat Wirausaha</p>
                            <h4 class="my-1 mt-3" style="color:#1D9375;">200</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #C3FDF1;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44" fill="none">
                                <path d="M41.2112 8.24996H33.3857L34.1523 5.18543L37.4454 4.06395C38.1458 3.8259 38.5626 3.08168 38.3607 2.37012C38.3093 2.19112 38.2221 2.02443 38.1043 1.88015C37.9866 1.73587 37.8407 1.61701 37.6757 1.53079C37.5106 1.44456 37.3298 1.39276 37.1441 1.37853C36.9584 1.3643 36.7718 1.38794 36.5955 1.44801L32.5564 2.82301C32.3389 2.89718 32.1435 3.02469 31.9879 3.19388C31.8324 3.36307 31.7218 3.56855 31.6661 3.79153L30.5515 8.24996H19.2885C18.5486 8.24996 17.9135 8.81887 17.8766 9.55879C17.8676 9.74471 17.8965 9.9305 17.9615 10.1049C18.0265 10.2793 18.1262 10.4388 18.2546 10.5735C18.383 10.7083 18.5374 10.8155 18.7085 10.8888C18.8796 10.9621 19.0637 10.9999 19.2499 11H19.4862L19.5721 11.7442C19.5924 11.918 19.6758 12.0783 19.8065 12.1946C19.9372 12.3109 20.1062 12.3751 20.2811 12.375C23.6327 12.375 26.6113 13.3117 28.8852 15.0837C30.15 16.0582 31.1752 17.309 31.8827 18.7404C32.2787 19.5455 32.5709 20.3976 32.7524 21.2764C32.7885 21.4476 32.8899 21.598 33.0351 21.6957C34.2042 22.489 35.0666 23.6584 35.479 25.0096C35.8914 26.3608 35.829 27.8125 35.3021 29.1233C35.2409 29.275 35.2363 29.4437 35.2892 29.5986C35.5937 30.471 35.7494 31.3884 35.7499 32.3125C35.7499 34.2323 35.0968 36.0619 33.9108 37.4644C33.2384 38.2649 32.3926 38.9017 31.4375 39.3267C31.2723 39.3995 31.1423 39.5344 31.0757 39.7022C30.7188 40.632 30.2148 41.4984 29.583 42.2683C29.5567 42.2996 29.5399 42.3376 29.5344 42.3781C29.529 42.4186 29.5352 42.4598 29.5523 42.4968C29.5695 42.5339 29.5968 42.5653 29.6312 42.5874C29.6655 42.6095 29.7054 42.6213 29.7463 42.6215H33.9753C35.0107 42.6173 36.007 42.2256 36.7681 41.5235C37.5291 40.8215 37.9998 39.86 38.0874 38.8282L41.0264 11H41.2499C41.4361 11.0002 41.6205 10.9625 41.7918 10.8893C41.9631 10.8161 42.1177 10.7089 42.2463 10.5741C42.3749 10.4394 42.4748 10.2799 42.5398 10.1053C42.6049 9.93079 42.6338 9.74485 42.6249 9.55879C42.5888 8.81887 41.9511 8.24996 41.2112 8.24996Z" fill="#1D9375"/>
                                <path d="M9.34055 27.5C9.61174 27.4987 9.88049 27.5512 10.1313 27.6545C10.382 27.7577 10.6098 27.9097 10.8015 28.1016L12.1344 29.4345C12.1663 29.4664 12.2042 29.4918 12.2459 29.5091C12.2877 29.5264 12.3324 29.5353 12.3776 29.5353C12.4228 29.5353 12.4675 29.5264 12.5092 29.5091C12.5509 29.4918 12.5889 29.4664 12.6208 29.4345L13.9511 28.1016C14.1428 27.9097 14.3706 27.7577 14.6213 27.6545C14.8721 27.5512 15.1408 27.4987 15.412 27.5H32.3056C32.3959 27.5009 32.4855 27.484 32.5692 27.4503C32.653 27.4166 32.7293 27.3667 32.7938 27.3035C32.8583 27.2403 32.9097 27.165 32.945 27.082C32.9804 26.9989 32.9991 26.9097 33 26.8194V26.8125C32.999 26.0204 32.725 25.2528 32.224 24.6391C31.7231 24.0255 31.0259 23.6033 30.25 23.4437C30.1795 20.8923 29.1328 18.7567 27.1984 17.2563C25.4091 15.8606 23.0184 15.125 20.2812 15.125H14.0938C8.23109 15.125 4.25992 18.4568 4.125 23.4437C3.34908 23.6033 2.65189 24.0255 2.15096 24.6391C1.65002 25.2528 1.37597 26.0204 1.375 26.8125C1.375 26.9948 1.44743 27.1697 1.57636 27.2986C1.7053 27.4276 1.88016 27.5 2.0625 27.5H9.34055Z" fill="#1D9375"/>
                                <path d="M15.9792 30.25C15.8889 30.2499 15.7995 30.2677 15.716 30.3022C15.6326 30.3367 15.5567 30.3873 15.4928 30.4511L13.5902 32.3546C13.2678 32.6768 12.8308 32.8579 12.375 32.8579C11.9193 32.8579 11.4822 32.6768 11.1598 32.3546L9.25719 30.4511C9.19329 30.3873 9.11745 30.3367 9.03399 30.3022C8.95053 30.2677 8.86109 30.2499 8.77078 30.25H2.80672C2.48373 30.2486 2.17063 30.3614 1.92278 30.5685C1.67494 30.7756 1.5083 31.0637 1.45234 31.3818C1.40072 31.6894 1.37485 32.0007 1.375 32.3125C1.375 34.9413 3.19086 37.0829 5.43641 37.125C5.64524 38.4244 6.15055 39.5983 6.91109 40.517C8.03602 41.8756 9.67141 42.625 11.5156 42.625H22.8594C24.7036 42.625 26.339 41.8756 27.4639 40.5153C28.2245 39.5966 28.7298 38.4227 28.9386 37.1233C31.1841 37.0829 33 34.9413 33 32.3108C33.0002 31.999 32.9743 31.6876 32.9227 31.3801C32.8663 31.0623 32.6995 30.7746 32.4517 30.5678C32.2039 30.3611 31.891 30.2485 31.5683 30.25H15.9792Z" fill="#1D9375"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10 border-start border-0 border-4" style="border-color: #FA896B !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tidak Ada Kegiatan</p>
                            <h4 class="my-1 mt-3" style="color:#FA896B;">200</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #FEE8E0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44" fill="none">
                                <path d="M16.5 22C18.688 22 20.7865 21.1308 22.3336 19.5836C23.8808 18.0365 24.75 15.938 24.75 13.75C24.75 11.562 23.8808 9.46354 22.3336 7.91637C20.7865 6.36919 18.688 5.5 16.5 5.5C14.312 5.5 12.2135 6.36919 10.6664 7.91637C9.11919 9.46354 8.25 11.562 8.25 13.75C8.25 15.938 9.11919 18.0365 10.6664 19.5836C12.2135 21.1308 14.312 22 16.5 22ZM2.75 38.5C2.75 38.5 0 38.5 0 35.75C0 33 2.75 24.75 16.5 24.75C30.25 24.75 33 33 33 35.75C33 38.5 30.25 38.5 30.25 38.5H2.75ZM30.25 9.625C30.25 9.26033 30.3949 8.91059 30.6527 8.65273C30.9106 8.39487 31.2603 8.25 31.625 8.25H42.625C42.9897 8.25 43.3394 8.39487 43.5973 8.65273C43.8551 8.91059 44 9.26033 44 9.625C44 9.98967 43.8551 10.3394 43.5973 10.5973C43.3394 10.8551 42.9897 11 42.625 11H31.625C31.2603 11 30.9106 10.8551 30.6527 10.5973C30.3949 10.3394 30.25 9.98967 30.25 9.625ZM31.625 16.5C31.2603 16.5 30.9106 16.6449 30.6527 16.9027C30.3949 17.1606 30.25 17.5103 30.25 17.875C30.25 18.2397 30.3949 18.5894 30.6527 18.8473C30.9106 19.1051 31.2603 19.25 31.625 19.25H42.625C42.9897 19.25 43.3394 19.1051 43.5973 18.8473C43.8551 18.5894 44 18.2397 44 17.875C44 17.5103 43.8551 17.1606 43.5973 16.9027C43.3394 16.6449 42.9897 16.5 42.625 16.5H31.625ZM37.125 24.75C36.7603 24.75 36.4106 24.8949 36.1527 25.1527C35.8949 25.4106 35.75 25.7603 35.75 26.125C35.75 26.4897 35.8949 26.8394 36.1527 27.0973C36.4106 27.3551 36.7603 27.5 37.125 27.5H42.625C42.9897 27.5 43.3394 27.3551 43.5973 27.0973C43.8551 26.8394 44 26.4897 44 26.125C44 25.7603 43.8551 25.4106 43.5973 25.1527C43.3394 24.8949 42.9897 24.75 42.625 24.75H37.125ZM37.125 33C36.7603 33 36.4106 33.1449 36.1527 33.4027C35.8949 33.6606 35.75 34.0103 35.75 34.375C35.75 34.7397 35.8949 35.0894 36.1527 35.3473C36.4106 35.6051 36.7603 35.75 37.125 35.75H42.625C42.9897 35.75 43.3394 35.6051 43.5973 35.3473C43.8551 35.0894 44 34.7397 44 34.375C44 34.0103 43.8551 33.6606 43.5973 33.4027C43.3394 33.1449 42.9897 33 42.625 33H37.125Z" fill="#FA896B"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10 border-start border-0 border-4" style="border-color: #671FFF !important;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Kuliah S2</p>
                            <h4 class="my-1 mt-3" style="color:#671FFF;">200</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle text-white ms-auto" style="background-color: #ECE3FF;">
                            <svg width="30" height="30" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="icon / ionicons / filled / school">
                                <path id="Vector" d="M22 31.6249C21.7606 31.6249 21.5254 31.5624 21.3177 31.4436L9.28125 24.5643C9.17666 24.5039 9.05801 24.4721 8.93725 24.4722C8.81648 24.4722 8.69785 24.5041 8.59331 24.5645C8.48877 24.625 8.402 24.7119 8.34173 24.8166C8.28146 24.9212 8.24982 25.0399 8.25 25.1607V31.6249C8.2498 31.8703 8.31528 32.1113 8.43965 32.3229C8.56401 32.5344 8.74274 32.7088 8.95727 32.828L21.3323 39.703C21.5365 39.8165 21.7663 39.876 22 39.876C22.2337 39.876 22.4635 39.8165 22.6677 39.703L35.0427 32.828C35.2573 32.7088 35.436 32.5344 35.5604 32.3229C35.6847 32.1113 35.7502 31.8703 35.75 31.6249V25.1607C35.7502 25.0399 35.7185 24.9212 35.6583 24.8166C35.598 24.7119 35.5112 24.625 35.4067 24.5645C35.3021 24.5041 35.1835 24.4722 35.0628 24.4722C34.942 24.4721 34.8233 24.5039 34.7188 24.5643L22.6823 31.4436C22.4746 31.5624 22.2394 31.6249 22 31.6249Z" fill="#671FFF"/>
                                <path id="Vector_2" d="M42.6178 16.371C42.6178 16.371 42.6178 16.3641 42.6178 16.3616C42.5955 16.1436 42.5215 15.9341 42.4019 15.7506C42.2824 15.567 42.1206 15.4147 41.9303 15.3063L22.6803 4.30625C22.4725 4.18748 22.2373 4.125 21.9979 4.125C21.7586 4.125 21.5234 4.18748 21.3156 4.30625L2.06557 15.3063C1.85519 15.4265 1.68033 15.6003 1.55871 15.8099C1.4371 16.0195 1.37305 16.2576 1.37305 16.4999C1.37305 16.7423 1.4371 16.9803 1.55871 17.1899C1.68033 17.3996 1.85519 17.5733 2.06557 17.6936L21.3156 28.6936C21.5234 28.8124 21.7586 28.8748 21.9979 28.8748C22.2373 28.8748 22.4725 28.8124 22.6803 28.6936L39.6168 19.0162C39.643 19.0011 39.6727 18.9931 39.7029 18.9931C39.7332 18.9932 39.7628 19.0012 39.789 19.0163C39.8151 19.0315 39.8368 19.0533 39.8519 19.0795C39.8669 19.1058 39.8748 19.1355 39.8746 19.1657V31.5863C39.8746 32.3262 40.4435 32.9613 41.1835 32.9982C41.3694 33.0072 41.5552 32.9783 41.7296 32.9133C41.904 32.8483 42.0634 32.7486 42.1982 32.6202C42.3329 32.4918 42.4402 32.3374 42.5135 32.1663C42.5868 31.9952 42.6246 31.8111 42.6246 31.6249V16.4999C42.6245 16.4569 42.6222 16.4138 42.6178 16.371Z" fill="#671FFF"/>
                                <path id="2" d="M19.2613 17.9459C20.0933 17.2526 20.7563 16.6763 21.2503 16.2169C21.7443 15.7489 22.1559 15.2636 22.4853 14.7609C22.8146 14.2583 22.9793 13.7643 22.9793 13.2789C22.9793 12.8369 22.8753 12.4903 22.6673 12.2389C22.4593 11.9876 22.1386 11.8619 21.7053 11.8619C21.2719 11.8619 20.9383 12.0093 20.7043 12.3039C20.4703 12.5899 20.3489 12.9843 20.3403 13.4869H18.5723C18.6069 12.4469 18.9146 11.6583 19.4953 11.1209C20.0846 10.5836 20.8299 10.3149 21.7313 10.3149C22.7193 10.3149 23.4776 10.5793 24.0063 11.1079C24.5349 11.6279 24.7993 12.3169 24.7993 13.1749C24.7993 13.8509 24.6173 14.4966 24.2533 15.1119C23.8893 15.7273 23.4733 16.2646 23.0053 16.7239C22.5373 17.1746 21.9263 17.7206 21.1723 18.3619H25.0073V19.8699H18.5853V18.5179L19.2613 17.9459Z" fill="white"/>
                                </g>
                                </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
