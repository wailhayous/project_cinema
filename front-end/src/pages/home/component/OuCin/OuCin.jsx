import React from 'react'
// import './OuCin.css';
import './OuCin.css'
import oour from '../../../../images/ourcinema.webp'
import { FaRegCalendar } from "react-icons/fa";

export default function OuCin() {
    return (
        <div>
            <div className="parent-our">
                <div className="ot">
                    <h3>OUR CINEMA</h3>
                </div>
                <div className="ourcin">
                    <div className="ourleft">
                        <img src={oour} alt="" />
                        <p>Cinema Abineda is Casablanca's most prestigious cinema,
                            offering an unparalleled movie-going experience with
                            cutting-edge technology, luxurious seating, and Morocco's finest
                            selection of local and international films.</p>
                    </div>
                    
                    <div className="ourright">

                        <div className="romac">
                            <div className="riu">
                                <FaRegCalendar className='iconreg' />
                                <div className="rows">
                                    <h4>Room 1 — IMAX</h4> <p>120 seats · 12 rows</p>
                                </div>
                            </div>
                            <p className='ac'>active</p>
                        </div>
                        <div className="romac">
                            <div className="riu">
                                <FaRegCalendar className='iconreg' />
                                <div className="rows">
                                    <h4>Room 1 — IMAX</h4> <p>120 seats · 12 rows</p>
                                </div>
                            </div>
                            <p className='ac'>active</p>
                        </div>
                        <div className="romac">
                            <div className="riu">
                                <FaRegCalendar className='iconreg' />
                                <div className="rows">
                                    <h4>Room 1 — IMAX</h4> <p>120 seats · 12 rows</p>
                                </div>
                            </div>
                            <p className='ac'>active</p>
                        </div>
                        <div className="romac">
                            <div className="riu">
                                <FaRegCalendar className='iconreg' />
                                <div className="rows">
                                    <h4>Room 1 — IMAX</h4> <p>120 seats · 12 rows</p>
                                </div>
                            </div>
                            <p className='ac'>active</p>
                        </div>


                        <div className="opening">
                            <h4>OPENING HOURS</h4>
                            <div className="os">
                                <div className="Mo">
                                    <p className='tn'>Monday-Thursday</p>
                                    <p className='tn'>Friday-Sunday</p>
                                </div>
                                <div className="tim">
                                    <p>13:00 - 00:00</p>
                                    <p>11:00 - 01:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}
