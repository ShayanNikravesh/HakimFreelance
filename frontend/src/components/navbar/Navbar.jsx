import React from 'react'
import { Link } from "react-router-dom";

// import Dropdown from "../components/navbar dropDown/Dropdown";
import Dropdown from '../navbar dropDown/Dropdown';

export default function Navbar() {
  return (
    <nav className="bg-gray-200 shadow shadow-gray-300 w-100 px-8 md:px-auto">
    <div className="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between">
       {/* icon */}
       <div className="text-primary">
          <svg
             xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             strokeWidth={1.5}
             stroke="currentColor"
             className="size-10"
          >
             <path
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
             />
          </svg>
       </div>

       <div className="flex gap-x-4">
          <div className="text-gray-500  w-full md:w-auto md: ">
             <ul className="flex font-semibold justify-between  [&_*]:duration-100 [&_*]:text-lg">
                <li className="md:px-4 md:py-2 text-primary">
                   <a href="#">پیشخوان</a>
                </li>

                <li className="relative md:px-4 md:py-2 group ">

                   <div className="group-hover:text-primary_hover flex items-center cursor-pointer">
                      <a href="#">دسته بندی</a>
                      <svg
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         strokeWidth={1.5}
                         stroke="currentColor"
                         className="size-4 group-hover:rotate-180 !duration-300 "
                      >
                         <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="m19.5 8.25-7.5 7.5-7.5-7.5"
                         />
                      </svg>
                   </div>

                   <div className="absolute top-12 right-4  
                     w-36 hidden group-hover:block  !duration-1000">
                      <Dropdown />
                      <Dropdown />
                      <Dropdown />
                      <Dropdown />
                      <Dropdown />
                   </div>

                </li>

                <li className="md:px-4 md:py-2 hover:text-primary_hover">
                   <a href="#">فریلنسرها</a>
                </li>
                <li className="md:px-4 md:py-2 hover:text-primary_hover">
                   <a href="#">کارفرمایان</a>
                </li>
                <li className="md:px-4 md:py-2 hover:text-primary_hover">
                   <a href="#">درباره ما</a>
                </li>
             </ul>
          </div>

          <div className="flex items-center justify-start bg-white overflow-hidden p-1 rounded-lg">
             <label className="">
                <svg
                   xmlns="http://www.w3.org/2000/svg"
                   fill="none"
                   viewBox="0 0 24 24"
                   strokeWidth={2}
                   stroke="currentColor"
                   className="size-6 text-primary"
                >
                   <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
                   />
                </svg>
             </label>
             <input
                type="text"
                placeholder="جستجو"
                className="focus:outline-none rounded-lg px-14 pr-2 py-1 cursor-pointer"
             />
          </div>
       </div>

       <div className="">
          <Link to={'/login'} className="px-4 py-2 bg-primary hover:bg-primary_hover duration-300 text-gray-50 rounded-xl flex items-center gap-2">
             <svg
                xmlns="http://www.w3.org/2000/svg"
                className="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
             >
                <path
                   fillRule="evenodd"
                   d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
                   clipRule="evenodd"
                />
             </svg>
             <span className="font-semibold text-[18px]">ورود</span>
          </Link>
       </div>
    </div>
 </nav>
  )
}
