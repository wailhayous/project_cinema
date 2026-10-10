import React from 'react'
import NavHome from './component/NavHome/NavHome'
import HomePage from './component/HomePage/HomePage'
export default function Home() {
  return (
    <div>
      <NavHome/>
      <div style={{paddingTop:'60px'}}>
        <HomePage />
      </div>
    </div>
  )
}
