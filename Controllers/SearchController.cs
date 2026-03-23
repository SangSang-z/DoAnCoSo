using Microsoft.AspNetCore.Mvc;
using Website_for_selling_car_tickets.Models;

namespace Website_for_selling_car_tickets.Controllers
{
    public class SearchController : Controller
    {
        public IActionResult SearchInfTrip()
        {
            return View();
        }

        // Nếu có form tìm kiếm thì nên có thêm Action:
        [HttpPost]
        public IActionResult FindTrips(string from, string to, DateTime date)
        {
            // Logic xử lý tìm kiếm chuyến xe
            return View("SearchInfTrip"); // hoặc View("Result", danh sách chuyến)
        }
    }

}