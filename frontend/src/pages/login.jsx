import React from "react";
import { Link } from "react-router-dom";

export default function Login() {
   return (
      <div className="flex items-center justify-center h-screen text-primaryText bg-purple-600 ">
         <form className="flex flex-col p-5 w-full xl:p-8 xl:w-[420px] xl:border-[1px] rounded-lg border-slate-300 bg-violet-50">
            <div className="w-full mb-6  flex justify-center">
               <img src="./image/logo.svg" width="155px" className="" alt="" />
            </div>

            <div className="flex rounded-lg justify-start gap-x-2 items-center font-extrabold text-lg text-primary mb-5">
               <div>ورود</div>
               <div className="h-6 bg-[#0c0c0c] w-[3px] rounded-2xl"></div>
               <div>ثبت نام</div>
            </div>

            <p className="mb-3">سلام!</p>

            <div className="mb-6">
               <label className="">لطفا نام کاربری خود را وارد کنید</label>
               <input
                  className="w-full bg-purple-200 rounded-lg p-2.5 border-b-[2px] border-b-primary
                  focus:outline-none duration-100 mt-1 mb-0.5 focus:ring-2 focus:ring-primary"
                  type="email"
                  name=""
                  id=""
               />
               <span className="text-prborder-b-primary">
                  لطفا این قسمت را خالی نگذارید
               </span>
            </div>
            <div className="mb-5">
               <label className="">لطفا رمز عبور خود را وارد کنید</label>
               <input
                  className="w-full bg-purple-200 rounded-lg p-2.5 border-b-[2px] border-b-primary
                  focus:outline-none duration-100 mt-1 mb-0.5 focus:ring-2 focus:ring-primary"
                  type="text"
                  name=""
                  id=""
               />
               <span className="text-prborder-b-primary">
                  لطفا این قسمت را خالی نگذارید
               </span>
            </div>

            <div className="p-2 bg-primary hover:bg-primary_hover duration-200 rounded-lg mb-4">
               <button
                  type="submit"
                  className="w-full text-lg font-bold text-white"
               >
                  ورود
               </button>
            </div>
            <p className="text-xs">
               ورود شما به معنای پذیرش{" "}
               <Link className="text-primary">شرایط ما </Link>و
               <Link className="text-primary">قوانین و حریم‌ خصوصی</Link> است
            </p>
         </form>
      </div>
   );
}
