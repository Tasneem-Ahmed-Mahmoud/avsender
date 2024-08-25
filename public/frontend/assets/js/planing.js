document.addEventListener('DOMContentLoaded', function() {

  const navLinks = document.querySelectorAll('.plan-link');
  const planItems = Array.from(document.querySelectorAll('.planning-card'));

  // Function to reorder plans
  function reorderPlans() {
    const visiblePlans = planItems.filter(plan => plan.classList.contains('visible'));
    const popularPlan = visiblePlans.find(plan => plan.querySelector('.popular-plan'));

    if (popularPlan) {
      // Remove popular plan from the visible plans
      const otherPlans = visiblePlans.filter(plan => plan !== popularPlan);
      // Insert popular plan into the second position
      otherPlans.splice(1, 0, popularPlan);

      // Reorder the DOM
      otherPlans.forEach(plan => plan.parentNode.appendChild(plan));
    }
  }

  // Set default display to "yearly" plans
  const defaultType = 'yearly';
  planItems.forEach(plan => {
    if (plan.getAttribute('data-plan-type') === defaultType) {
      plan.classList.add('visible');
    } else {
      plan.classList.remove('visible');
    }
  });

  // Set default active link
  navLinks.forEach(link => {
    if (link.id === defaultType) {
      link.classList.add('active-plan');
    } else {
      link.classList.remove('active-plan');
    }
  });

  // Initial reorder
  reorderPlans();

  // Add click event listeners
  navLinks.forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      const selectedType = this.id;

      // Toggle active class on nav links
      navLinks.forEach(link => link.classList.remove('active-plan'));
      this.classList.add('active-plan');

      // Show/Hide plans based on the selected type
      planItems.forEach(plan => {
        if (plan.getAttribute('data-plan-type') === selectedType) {
          plan.classList.add('visible');
        } else {
          plan.classList.remove('visible');
        }
      });

      // Reorder plans after filtering
      reorderPlans();
    });
  });
});
