using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using Website_for_selling_car_tickets.Models;

namespace Website_for_selling_car_tickets.Controllers
{
    public class FooterConTroller : Controller
    {
        public IActionResult introduce_Page()
        {
            return View();
        }
        public IActionResult news_page()
        {
            return View();
        }
        public IActionResult partner()
        {
            return View();
        }
        public IActionResult polyci_customer()
        {
            return View();
        }
        public IActionResult polyci_pay()
        {
            return View();
        }
        public IActionResult System_homecar()
        {
            return View();
        }

    }

}
