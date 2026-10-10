
import React from 'react';
import './NavHome.css';
import { NavLink } from 'react-router-dom';
import { FaFilm } from 'react-icons/fa';
import user from '../../../../images/user.webp';

export default function NavHome() {
  return (
    <div className="navHom">
      <div className="navleft">
        <h3>
          <FaFilm className="icon-nav" />
          <div>
            CINEMA <span className="t1">ABINEDA</span>
          </div>
        </h3>
      </div>

      <div className="navCentre">
        <NavLink to="/" end>Home</NavLink>
        <NavLink to="/movies">Movies</NavLink>
        <NavLink to="/snacks">Snacks</NavLink>
        <NavLink to="/my-tickets">My Tickets</NavLink>
      </div>

      <div className="navRight">
        <div className="login">LOGIN</div>
        <div className="register">REGISTER</div>
      </div>

      {/* <div className="profile">
       <div className="img"> <img src={user} alt="" /></div> Demo <button className='logout'>Logout</button>
      </div> */}
    </div>
  );
}
