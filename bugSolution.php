function foo(a, b) {
  if (a === 0 || b === 0) {
    return NaN; // Corrected to return NaN for better error handling
  }
  return a + b;
} 