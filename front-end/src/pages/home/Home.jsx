import React from 'react'
import NavHome from './component/NavHome/NavHome'
import HomePage from './component/HomePage/HomePage'
import TotCin from './component/TotCin/TotCin'
export default function Home() {
  return (
    <div>
      <NavHome/>
      <HomePage />
      <TotCin/>
    </div>
  )
}
