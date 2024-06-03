import React from "react";
import { Route, Routes } from "react-router-dom";
import Index from "./pages/Index";
import Login from "./pages/login";


export default function App() {
   return (
      <div>
         <Routes>
            <Route path="/" element={<Index />} />
            <Route path="/login" element={<Login/>} />
         </Routes>
      </div>
   );
}
