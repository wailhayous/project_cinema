import React from 'react'
import Home from './pages/home/Home'
import './index.css'
import { Routes, Route } from 'react-router-dom'

export default function App() {
  return (
    <div>
      <Routes>
        <Route path='/' element={<Home/>} />
      </Routes>
      
    </div>
  )
}
