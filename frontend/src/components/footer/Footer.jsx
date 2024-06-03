import React from "react";

import { IoChevronUp } from "react-icons/io5";
import { IoLogoInstagram } from "react-icons/io5";
import { FaTwitter } from "react-icons/fa";
import { FaLinkedin } from "react-icons/fa6";
import { PiFilmReelFill } from "react-icons/pi";

export default function Footer() {
   const scrollToTop = () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
   };
   return (
      <div className="hidden xl:flex w-full flex-col overflow-hidden items-center mt-64">
         <div className="bg-gray-300 w-screen h-[0.5px] mb-5"></div>
         <div className="max-w-[1700px] bg-blue-300d w-full px-5 py-4">
            <div className="w-full flex justify-between mb-4">
               <div>
                  <img src="./image/footer/digi.svg" className="" alt="" />
               </div>
               <button
                  className="flex px-2.5 py-2 items-center  gap-x-2 text-sm border border-gray-300 rounded-lg hover:ring-2 duration-300 ring-primary "
                  onClick={scrollToTop}
               >
                  بازگشت به بالا
                  <IoChevronUp className="text-base" />
               </button>
            </div>

            <div className="text-sm  mb-9">
               <span className="ml-5">تلفن پشتیبانی ۶۱۹۳۰۰۰۰ - ۰۲۱ </span>
               <span className="ml-5">|</span>
               <span className="ml-5">۰۲۱-۹۱۰۰۰۱۰۰</span>
               <span className="ml-5">|</span>
               <span className="ml-5">
                  ۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم
               </span>
            </div>

            <div className="flex w-full justify-around [&>*]:cursor-pointer [&>*]:gap-y-1 mb-10">
               <div className="flex flex-col items-center">
                  <img
                     src="https://ponisha.ir/_next/image?url=%2Fassets%2Fimages%2Flanding%2Fcompanies%2Falopeyk.png&w=256&q=75"
                     className="w-[180px]"
                     alt=""
                  />

               </div>
               <div className="flex flex-col items-center">
                  <img
                     src="https://ponisha.ir/_next/image?url=%2Fassets%2Fimages%2Flanding%2Fcompanies%2Fbazaar.png&w=256&q=75"
                     className="w-[180px]"
                     alt=""
                  />
                  
               </div>
               <div className="flex flex-col items-center">
                  <img
                     src="https://ponisha.ir/_next/image?url=%2Fassets%2Fimages%2Flanding%2Fcompanies%2Fdivar.png&w=256&q=75"
                     className="w-[180px]"
                     alt=""
                  />
                  
               </div>
               <div className="flex flex-col items-center">
                  <img
                     src="https://ponisha.ir/_next/image?url=%2Fassets%2Fimages%2Flanding%2Fcompanies%2Fsheypoor.png&w=256&q=75"
                     className="w-[180px]"
                     alt=""
                  />
                  
               </div>
               <div className="flex flex-col items-center">
                  <img
                     src="https://ponisha.ir/_next/image?url=%2Fassets%2Fimages%2Flanding%2Fcompanies%2Firanserver.png&w=256&q=75"
                     className="w-[180px]"
                     alt=""
                  />
                  
               </div>
            </div>

            <div className="grid grid-cols-4 [&>*]:ml-[385px] [&>*]:w-full">
               <div className="flex flex-col gap-y-3  text-[14px] ">
                  <h3 className="text-black text-[18px] font-medium">
                     با فریلنسرها
                  </h3>
                  <a href="">اتاق خبر فریلنسرها</a>
                  <a href=""> فروش در فریلنسرها</a>
                  <a href="">فرصت های شغلی</a>
                  <a href="">گزارش تخلف در فریلنسرها</a>
                  <a href="">تماس با فریلنسرها</a>
                  <a href="">درباره فریلنسرها</a>
               </div>

               <div className="flex flex-col gap-y-3  text-[14px] ">
                  <h3 className="text-black text-[18px] font-medium">
                     خدمات مشتریان
                  </h3>
                  <a href="">پاسخ به پرسش‌های متداول</a>
                  <a href="">رویه‌های بازگرداندن کالا</a>
                  <a href="">شرایط استفاده</a>
                  <a href="">حریم خصوصی</a>
                  <a href="">گزارش باگ</a>
               </div>

               <div className="flex flex-col gap-y-3  text-[14px] ">
                  <h3 className="text-black text-[18px] font-medium">
                     راهنمای خرید از فریلنسرها
                  </h3>
                  <a href="">نحوه ثبت سفارش</a>
                  <a href="">رویه ارسال سفارش</a>
                  <a href="">شیوه‌های پرداخت</a>
               </div>

               <div className="flex flex-col gap-y-3  text-[14px] ">
                  <h3 className="text-black text-[18px] font-medium">
                     همراه ما باشید!
                  </h3>
                  <div className="flex justify-start gap-x-10 text-gray-400 mb-6">
                     <a href="https://www.instagram.com/digikalacom/">
                        <IoLogoInstagram className="text-[34px] hover:text-primary duration-300" />
                     </a>
                     <a href="https://twitter.com/digikalacom">
                        <FaTwitter className="text-[34px] hover:text-sky-500 duration-300" />
                     </a>
                     <a href="https://www.linkedin.com/company/digikala/mycompany/">
                        <FaLinkedin className="text-[34px] hover:text-blue-700 duration-300" />
                     </a>
                     <a href="https://www.aparat.com/digikala/">
                        <PiFilmReelFill className="text-[34px] hover:text-primary duration-300" />
                     </a>
                  </div>
                  <p className="text-[16px] font-semibold text-black">
                     با ثبت ایمیل، از جدید‌ترین پروژه ها با‌خبر شوید
                  </p>
                  <div>
                     <div className="">
                        <input
                           type="text"
                           className="p-3.5 w-[261px] focus:outline-none bg-gray-200
                         rounded-lg"
                           placeholder="ایمیل شما"
                        />
                        <button
                           className="p-3.5 bg-gray-200
                         rounded-lg text-white mr-2 hover:bg-primary duration-300"
                        >
                           ثبت
                        </button>
                     </div>
                     <span className="text-[11px] text-red-600 ">
                        اینجا را خالی نگذارید
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   );
}
